<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\Keranjang;
use App\Models\DetailKeranjang;
use App\Models\Apps;
use App\Models\PembelianApps;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if ((Gate::allows('is-admin'))) {
            abort(403);
        }
        $user_id = Auth::user()->id;
        $apps = DB::table('apps')
            ->join('detail_keranjangs', 'apps.id', '=', 'detail_keranjangs.app_id')
            ->join('keranjangs', 'keranjangs.id', '=', 'detail_keranjangs.keranjang_id')
            ->where('keranjangs.user_id', $user_id)
            ->select('apps.*', 'detail_keranjangs.jumlah', 'detail_keranjangs.total_harga')
            ->get();
        $keranjang = Keranjang::where('user_id', $user_id)->first();
        // dd($barangs);

        if ($keranjang != null) {
            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => $keranjang->no_keranjang,
                    'gross_amount' => $keranjang->total_harga,
                ),
                'customer_details' => array(
                    'first_name' => Auth::user()->name,
                    'last_name' => '',
                    'email' => Auth::user()->email
                    // 'phone' => '08111222333',
                ),
            );


            $snapToken = \Midtrans\Snap::getSnapToken($params);

            return view('keranjang', ['apps' => $apps, 'keranjang' => $keranjang, 'snapToken' => $snapToken]);
        } else {
            return view('keranjang', ['apps' => $apps, 'keranjang' => $keranjang]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ((Gate::allows('is-admin'))) {
            abort(403);
        }
        $apps = Apps::find($request->id);
        $user_id = Auth::user()->id;

        // Check if the user has made a payment and purchased the book
        $hasPurchased = PembelianApps::where('user_id', $user_id)
            ->where('app_id', $apps->id)
            ->exists();


        // If the user has purchased the book, do not allow adding more to the cart
        if ($hasPurchased) {
            return redirect()->back()->with('error', $apps->nama . ' telah dibeli sebelumnya.');
        }

        // Check if the book is out of stock
        if ($apps->stok <= 0) {
            return redirect()->back()->with('error', 'Mohon maaf, stok ' . $apps->nama . ' sudah habis.');
        }

        // Check if the user already has a cart
        $keranjang = Keranjang::where('user_id', $user_id)->first();

        // If the user already has a cart
        if ($keranjang) {
            // Check if the item is already in the cart
            $detail_keranjang = DetailKeranjang::where('keranjang_id', $keranjang->id)->where('app_id', $apps->id)->first();

            // If the item is already in the cart, do not allow adding more
            if ($detail_keranjang) {
                return redirect()->back()->with('error', $apps->nama . ' telah tersedia dalam keranjang.');
            } else {
                // Create a new item in the cart
                $detail_keranjang = new DetailKeranjang();
                $detail_keranjang->keranjang_id = $keranjang->id;
                $detail_keranjang->app_id = $apps->id;
                $detail_keranjang->jumlah = 1;
                $detail_keranjang->total_harga = $apps->harga * 1;
                $detail_keranjang->save();

                // Set a success message
                $message = $apps->nama . ' ditambahkan ke dalam keranjang';
            }

            // Calculate new total_harga for the cart
            $total_harga = DetailKeranjang::where('keranjang_id', $keranjang->id)->sum('total_harga');
            $keranjang->total_harga = $total_harga;
            $keranjang->update();
        } else {
            // Create a new cart
            $keranjang = new Keranjang();
            $keranjang->user_id = $user_id;
            $keranjang->no_keranjang = rand();
            $keranjang->total_harga = $apps->harga;

            $keranjang->save();

            // Create a new item in the cart
            $detail_keranjang = new DetailKeranjang();
            $detail_keranjang->keranjang_id = $keranjang->id;
            $detail_keranjang->app_id = $apps->id;
            $detail_keranjang->jumlah = 1;
            $detail_keranjang->total_harga = $apps->harga * 1;
            $detail_keranjang->save();

            // Set a success message
            $message = $apps->nama . ' ditambahkan ke dalam keranjang';
        }

        return redirect()->back()->with('success', $message);
    }

    public function callback(Request $request)
    {
        if ((Gate::allows('is-admin'))) {
            abort(403);
        }
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture' or $request->transaction_status == 'settlement') {
                $keranjang = Keranjang::where('no_keranjang', $request->order_id)->first();

                if ($keranjang) {
                    $keranjang->status = 'Paid';
                    $keranjang->update();

                    // Salin data keranjang sebelum dihapus

                    $transaksi = new Transaksi();
                    $transaksi->no_keranjang = $keranjang->no_keranjang;
                    $transaksi->user_id = $keranjang->user_id;
                    $transaksi->total_harga = $keranjang->total_harga;
                    $transaksi->status = $keranjang->status;
                    $transaksi->save();

                    // Simpan informasi pembelian buku
                    $detail_keranjangs = DetailKeranjang::where('keranjang_id', $keranjang->id)->get();

                    foreach ($detail_keranjangs as $detail_keranjang) {
                        $detail_transaksi = new DetailTransaksi();
                        $detail_transaksi->transaksi_id = $transaksi->id;
                        $detail_transaksi->app_id = $detail_keranjang->app_id;
                        $detail_transaksi->jumlah = $detail_keranjang->jumlah;
                        $detail_transaksi->total_harga = $detail_keranjang->total_harga;
                        $detail_transaksi->save();

                        $pembelian = new PembelianApps();
                        $pembelian->user_id = $keranjang->user_id;
                        $pembelian->app_id = $detail_keranjang->app_id;
                        $pembelian->tanggal_pembelian = $keranjang->updated_at;
                        $pembelian->save();

                        // Kurangi stok buku yang dibeli
                        $apps = Apps::find($detail_keranjang->app_id);
                        if ($apps) {
                            $apps->stok -= $detail_keranjang->jumlah;
                            $apps->save();
                        }
                    }

                    // Hapus data keranjang
                    $keranjang->delete();
                }
            }
        }
    }



    /**
     * Display the specified resource.
     */
    public function show($no_keranjang)
    {
        if ((Gate::allows('is-admin'))) {
            abort(403);
        }
        // Ambil transaksi berdasarkan nomor transaksi
        $transaksi = Transaksi::where('no_keranjang', $no_keranjang)->first();

        // Cek apakah transaksi tidak ditemukan atau pemilik transaksi bukan pengguna yang sedang login
        if (!$transaksi || $transaksi->user_id !== Auth::id()) {
            return abort(404); // Menampilkan error jika tidak valid atau bukan pemilik transaksi
        }

        // Ambil buku dan detail transaksi berdasarkan nomor transaksi
        $apps = DB::table('apps')
            ->join('detail_transaksis', 'apps.id', '=', 'detail_transaksis.app_id')
            ->where('detail_transaksis.transaksi_id', $transaksi->id)
            ->select('apps.*', 'detail_transaksis.jumlah', 'detail_transaksis.total_harga')
            ->get();

        // Ambil nama dan email pengguna
        $customer = Auth::user();
        // Tampilkan view invoice dengan data app dan transaksi
        return view('invoice', ['apps' => $apps, 'keranjang' => $transaksi, 'customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keranjang $keranjang)
    {
        if ((Gate::allows('is-admin'))) {
            abort(403);
        }
        $keranjang = Keranjang::find($keranjang->id);
        $keranjang->delete();

        return  redirect()->back();
    }

    public function koleksi()
    {
        // Dapatkan ID pengguna yang sedang masuk
        $user_id = Auth::id();

        // Ambil data buku dari tabel "bukus" berdasarkan pembelian buku dalam "pembelian_bukus"
        $apps = DB::table('apps')
            ->join('pembelian_apps', 'apps.id', '=', 'pembelian_apps.app_id')
            ->where('pembelian_apps.user_id', $user_id)
            ->select('apps.*')
            ->get();
        // Variabel $bukus akan berisi daftar buku yang sudah dibeli oleh pengguna
        return view('koleksiapps', compact('apps'));
    }
}
