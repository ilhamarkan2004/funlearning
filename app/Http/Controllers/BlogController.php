<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!(Gate::allows('is-admin'))) {
            abort(403);
        }
        $blogs = Blog::get();
        return view('admin.blog.index', [
            'blogs' => $blogs
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
        return view('admin.blog.create');
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
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:png,jpg,jpeg,svg',
        ]);
        $blog = new Blog();
        $blog->judul = $validateData['judul'];
        $blog->deskripsi = $validateData['deskripsi'];

        if ($request->File('gambar')) {
            $blog->gambar = $request->file('gambar')->store('blog');
        }

        $blog->save();
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        if (!(Gate::allows('is-admin'))) {
            abort(403);
        }
        return view('admin.blog.edit', [
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        if (!(Gate::allows('is-admin'))) {
            abort(403);
        }

        $validateData = $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:png,jpg,jpeg,svg',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus foto lama jika ada
            if ($blog->gambar) {
                Storage::delete($blog->gambar);
            }
            $validateData['gambar'] = $request->file('gambar')->store('blog');
        }

        $blog->update($validateData); // Perbarui data aplikasi

        return redirect()->route('blog.index')->with('success', 'Blog berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if (!(Gate::allows('is-admin'))) {
            abort(403);
        }
        // Hapus file  dari storage
        if ($blog->gambar) {
            Storage::delete($blog->gambar);
        }
        $blog->delete();

        return redirect()->route('blog.index');
    }
}
