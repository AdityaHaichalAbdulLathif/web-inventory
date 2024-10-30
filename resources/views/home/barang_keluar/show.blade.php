@extends('layouts.master')
@section('title','BarangKeluar')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 mt-5">
                    <div class="card h-100">
                    <img src="{{ asset('/storage/products/'.$barangKeluar->barang->gambar)}}" 
                    alt="" class="rounded">
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-75">{{ $barangKeluar->barang->nama_barang }}</h5>
                            <br>
                            <hr>
                            <p class="card-text">Rp. {{ number_format($barangKeluar->barang->harga_beli) }}</p>
                            <p class="card-text">{{ $barangKeluar->created_at }}</p>
                            <hr>
                            <p class="card-text"><small class="text-body-secondary">Jumlah : {{ $barangKeluar->jumlah }}</small></p>
                        </div>
                    </div>
                    <a href="/barang_keluar" class="btn btn-warning">Kembali</a>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection