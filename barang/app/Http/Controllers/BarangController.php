<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Barang $barang)
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'namaBarang' => 'required|string|max:100',
            'jenisBarang' => 'required|string|max:100',
            'stock' => 'required|integer',
            'status' => 'required|string|max:100',
            'hargaSatuan' => 'required|integer',
        ],
        [ 'stock.integer' => 'Stok harus berupa angka']);

        Barang::create($request->all());
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $validated = $request->validate([
            'namaBarang' => 'required|string|max:100',
            'jenisBarang' => 'required|string|max:100',
            'stock' => 'required|integer', 
            'status' => 'required|string|max:100',
            'hargaSatuan' => 'required|integer', 

        ], [ 'stock.integer' => 'Stok harus berupa angka']);
        
        $barang->update($validated);
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
