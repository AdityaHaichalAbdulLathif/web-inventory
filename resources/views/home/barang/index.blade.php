@extends('layouts.master');
@section('title','barang');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if(session('succes'))
                                <div class="alert alert-info">
                                    {{ session('succes')}}
                                </div>
                                @endif
                                <h3>Halaman Data Barang</h3>
                                <a class="btn btn-primary" href="/barang/tambah">Tambah</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">ID Jenis</th>
                                            <th scope="col">Harga Beli</th>
                                            <th scope="col">Harga Jual</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($barang as $barang)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('/storage/products/'.$barang->gambar)}}" 
                                                alt="" class="rounded" style="width: 150px">
                                            </td>
                                            <td>{{ $barang->nama_barang }}</td>
                                            <td>{{ $barang->Jenis->nama_jenis }}</td>
                                            <td>Rp. {{ number_format($barang->harga_beli)}}</td>
                                            <td>Rp. {{ number_format($barang->harga_jual)}}</td>
                                            <td>{{ $barang->stok }}</td>
                                            <td><a class="btn btn-warning" href="/barang/{{ $barang->id }}/show">Edit</a>
                                                <a class="btn btn-danger" href="/barang/{{ $barang->id }}/delete"
                                                onclick="return confirm('Yakin mau dihapus?')">Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection