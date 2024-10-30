<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\Supplier;

class DashboardController extends Controller
{
    /** 
     * Display a listing of the resourse.
     */
    public function index()
    {
        $totalBarang = Barang::count();
        $totalBarangMasuk = BarangMasuk::sum('jumlah');
        $totalBarangKeluar = BarangKeluar::sum('jumlah');
        $totalSupplier = Supplier::count();

        $historiBarangMasuk = BarangMasuk::orderBy('created_at', 'desc')->take(5)->get();
        $historiBarangKeluar = BarangKeluar::orderBy('created_at', 'desc')->take(5)->get();

        return view('home.dashboard', compact('totalBarang', 'totalBarangMasuk', 'totalBarangKeluar', 'totalSupplier', 'historiBarangMasuk', 'historiBarangKeluar' ));
    }
}
