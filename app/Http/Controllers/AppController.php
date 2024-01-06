<?php

namespace App\Http\Controllers;

use App\Models\Apps;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!(Gate::allows('is-admin'))) {
            abort(403);
        }
        $apps = Apps::get();
        return view('admin.apps.index', [
            'apps' => $apps
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!(Gate::allows('is-admin'))) {
            abort(403);
        }
        return view('admin.apps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!(Gate::allows('is-admin'))) {
            abort(403);
        }
        $validateData = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'tipe' => 'required|in:gratis,berbayar',
            'harga' => 'required|integer',
            'kategori' => 'required|in:konvensional,apps,bundle',
            'gambar' => 'required|image|mimes:png,jpg,jpeg,svg',
            'apk' => 'nullable'
        ]);
        $apps = new Apps();
        $apps->nama = $validateData['nama'];
        $apps->deskripsi = $validateData['deskripsi'];
        $apps->tipe = $validateData['tipe'];
        $apps->kategori = $validateData['kategori'];
        $apps->harga = $validateData['harga'];

        if ($request->File('gambar')) {
            $apps->gambar = $request->file('gambar')->store('Gambar');
        }
        if ($request->File('apk')) {
            $apps->apk = $request->file('apk')->store('APK');
        }

        $apps->save();
        return redirect()->route('apps.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apps $app)
    {
        if (!(Gate::allows('is-admin'))) {
            abort(403);
        }
        return view('admin.apps.edit', [
            'app' => $app
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apps $app)
    {
        if (!(Gate::allows('is-admin'))) {
            abort(403);
        }

        $validateData = $request->validate([
            'nama' => 'required|string',
            'tipe' => 'required|in:gratis,berbayar',
            'harga' => 'required|integer',
            'kategori' => 'required|in:konvensional,apps,bundle',
            'deskripsi' => 'required|string',
            'gambar' => 'image|mimes:png,jpg,jpeg,svg',
            'apk' => 'nullable',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus foto lama jika ada
            if ($app->gambar) {
                Storage::delete($app->gambar);
            }
            $validateData['gambar'] = $request->file('gambar')->store('Gambar');
        }

        if ($request->hasFile('apk')) {
            // Hapus file apk lama jika ada
            if ($app->apk) {
                Storage::delete($app->apk);
            }
            $validateData['apk'] = $request->file('apk')->store('APK');
        }

        $app->update($validateData); // Perbarui data aplikasi

        return redirect()->route('apps.index')->with('success', 'Aplikasi berhasil diperbarui.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apps $app)
    {
        if (!(Gate::allows('is-admin'))) {
            abort(403);
        }
        // Hapus file  dari storage
        if ($app->gambar) {
            Storage::delete($app->gambar);
        }

        if ($app->apk) {
            Storage::delete($app->apk);
        }
        $app->delete();

        return redirect()->route('apps.index');
    }
}
