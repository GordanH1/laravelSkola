<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProizvodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $proizvodi = [
        ['id' => 1, 'naziv' => 'Laptop', 'cijena' => 1200],
        ['id' => 2, 'naziv' => 'Mobitel', 'cijena' => 800],
        ['id' => 3, 'naziv' => 'Tipkovnica', 'cijena' => 100],
    ];

    return view('proizvodi.index', compact('proizvodi'));
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
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
