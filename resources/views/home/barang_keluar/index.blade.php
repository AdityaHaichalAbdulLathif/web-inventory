@extends('layouts.master');
@section('title','barang_keluar');
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Barang Keluar</h3>
                            <a class="btn btn-primary"href="/barang_keluar/tambah">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Nama Customer</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($barang_keluar as $barang_keluar)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $barang_keluar->Barang->nama_barang}}</td>
                                            <td>{{ $barang_keluar->nama_customer}}</td>
                                            <td>{{ $barang_keluar->jumlah}}</td>
                                            <td><a class="btn btn-info" href="/barang_keluar/{{$barang_keluar->id}}/show">Show</a></td>
                                         @endforeach
                                        </tr>
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
