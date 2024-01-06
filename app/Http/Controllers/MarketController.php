<?php

namespace App\Http\Controllers;

use App\Models\Apps;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if ((Gate::allows('is-admin'))) {
            abort(403);
        }
        $apps = Apps::get();
        return view('market', [
            'apps' => $apps
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $app = Apps::where('id', $id)->first();

        if (!$app) {
            return redirect()->back();
        }
        return view('detailapp', [
            'app' => $app
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apps $apps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apps $apps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apps $apps)
    {
        //
    }
}
