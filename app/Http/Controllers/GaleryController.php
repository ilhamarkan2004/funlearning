<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!(Gate::allows('is-admin'))) {
            abort(403);
        }
        $galerys = Galery::get();
        return view('admin.galery.index', [
            'galerys' => $galerys
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
        return view('admin.galery.create');
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
            'produksi' => 'required|string',
            'tahun' => 'required|string',
            'file' => 'mimes:mp4',
            'logo' => 'mimes:png,jpg,jpeg,svg'
        ]);
        $galery = new Galery();
        $galery->nama = $validateData['nama'];
        $galery->produksi = $validateData['produksi'];
        $galery->tahun = $validateData['tahun'];

        if ($request->File('file')) {
            $galery->file = $request->file('file')->store('file');
        }

        if ($request->File('logo')) {
            $galery->logo = $request->file('logo')->store('logo');
        }

        $galery->save();
        return redirect()->route('galery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galery $galery)
    {
        if (!(Gate::allows('is-admin'))) {
            abort(403);
        }
        return view('admin.galery.edit', [
            'galery' => $galery
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galery $galery)
    {
        if (!(Gate::allows('is-admin'))) {
            abort(403);
        }

        $validateData = $request->validate([
            'nama' => 'required|string',
            'produksi' => 'required|string',
            'tahun' => 'required|string',
            'file' => 'mimes:mp4',
            'logo' => 'mimes:png,jpg,jpeg,svg'
        ]);

        if ($request->hasFile('file')) {
           
            if ($galery->file) {
                Storage::delete($galery->file);
            }
            $validateData['file'] = $request->file('file')->store('file');
        }


        if ($request->hasFile('logo')) {

            if ($galery->logo) {
                Storage::delete($galery->logo);
            }
            $validateData['logo'] = $request->file('logo')->store('logo');
        }


        $galery->update($validateData); 

        return redirect()->route('galery.index')->with('success', 'Galery berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galery $galery)
    {
        if (!(Gate::allows('is-admin'))) {
            abort(403);
        }
        // Hapus file  dari storage
        if ($galery->file) {
            Storage::delete($galery->file);
        }
        $galery->delete();

        return redirect()->route('galery.index');
    }
}
