<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\Barang;
use App\Models\Supplier;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_masuk = BarangMasuk::all();
        return view('home.barang_masuk.index', compact('barang_masuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        $supplier = Supplier::all();
        return view('home.barang_masuk.tambah', compact('barang', 'supplier')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'id_barang' => 'required',
            'id_supplier' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        $id = $request->id_barang;
        $barang = Barang::find($id);
        $barang->increment('stok', $request->jumlah);

        BarangMasuk::create([
            'id_barang' => $request->id_barang,
            'id_supplier' => $request->id_supplier,
            'jumlah' => $request->jumlah,
        ]);
        return redirect('/barang_masuk')->with('success', 'Barang masuk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barangMasuk = BarangMasuk::find($id);
        return view('home.barang_masuk.show', compact('barangMasuk'));
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
