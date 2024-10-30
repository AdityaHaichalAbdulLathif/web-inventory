@extends('layouts.master')
@section('title','Dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $totalBarang }}</h3>
                <p>Jumlah Barang</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/barang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $totalBarangKeluar }}</h3>
                <p>Total Barang Keluar</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/barang_keluar" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $totalBarangMasuk }}</h3>
                <p>Total Barang Masuk</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/barang_masuk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $totalSupplier }}</h3>
                <p>Total Supplier</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/supplier" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
    </section>


    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Histori Terakhir dari Table <b>Barang Masuk</b></h3>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Nama Supplier</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($historiBarangMasuk->isEmpty())
                    <tr>
                      <td colspan="4" class="text-center">Tidak ada data barang masuk</td>
                    </tr>
                    @else
                     @foreach($historiBarangMasuk as $barangMasuk)
                    <tr>
                        <td>{{ $barangMasuk->barang->nama_barang }}</td>
                        <td>{{ $barangMasuk->supplier->nama_supplier }}</td>
                        <td>{{ $barangMasuk->jumlah }}</td>
                        <td>{{ $barangMasuk->created_at->format('d-m-Y H:i:s') }}</td>
                    </tr>
                    @endforeach
                  @endif
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Histori Terakhir dari Table <b>Barang Keluar</b></h3>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($historiBarangKeluar->isEmpty())
                    <tr>
                      <td colspan="4" class="text-center">Tidak ada data barang keluar</td>
                    </tr>
                    @else
                     @foreach($historiBarangKeluar as $barangKeluar)
                    <tr>
                        <td>{{ $barangKeluar->barang->nama_barang }}</td>
                        <td>{{ $barangKeluar->nama_customer }}</td>
                        <td>{{ $barangKeluar->jumlah }}</td>
                        <td>{{ $barangKeluar->created_at->format('d-m-Y H:i:s') }}</td>
                    </tr>
                    @endforeach
                  @endif
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </section>
  </div>
@endsection
