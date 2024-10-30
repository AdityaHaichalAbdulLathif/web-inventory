<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;
use App\Models\Barang;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_keluar = BarangKeluar::all();
        return view('home.barang_keluar.index', compact('barang_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        return view('home.barang_keluar.tambah', compact('barang')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //validate form
         $request->validate([
            'id_barang' => 'required',
            'nama_customer' => 'required',
            'jumlah' => 'required|numeric',
        ]);
        
        $id = $request->id_barang;
        $barang = Barang::find($id);

        if ($barang->stok < $request->jumlah) {
            return redirect('/barang_keluar')->with('error', 'Stok barang tidak mencukupi!');
        }

        $barang->decrement('stok', $request->jumlah);
        BarangKeluar::create([
            'id_barang' => $request->id_barang,
            'nama_customer' => $request->nama_customer,
            'jumlah' => $request->jumlah,
        ]);
        return redirect('/barang_keluar')->with('success', 'Barang keluar berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barangKeluar = BarangKeluar::find($id);
        return view('home.barang_keluar.show', compact('barangKeluar'));
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
