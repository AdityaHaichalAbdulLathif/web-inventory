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
                            <h3>Halaman Tambah Data barang</h3>
                            <a class="btn btn-warning" href="/barang">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/barang/simpan" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Gambar</label>
                                    <input
                                     type="file"
                                     class="form-control"
                                     name="gambar"
                                     id=""
                                     aria-describedy="helpId"
                                     placeholder=""
                                    />
                                    @error('gambar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Barang</label>
                                    <input
                                     type="text"
                                     class="form-control"
                                     name="nama_barang"
                                     id=""
                                     aria-describedy="helpId"
                                     placeholder=""
                                    />
                                    @error('nama_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">ID Jenis</label>
                                    <select name="id_jenis" id="" class="form-control">
                                        <option value="">Pilih Jenis</option>
                                        @foreach($jenis as $jenis)
                                            <option value="{{ $jenis->id }}">{{ $jenis->nama_jenis }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_jenis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Harga Beli</label>
                                    <input
                                     type="number"
                                     class="form-control"
                                     name="harga_beli"
                                     id=""
                                     value="{{ old('harga_beli')}}"
                                     aria-describedy="helpId"
                                     placeholder=""
                                    />
                                    @error('harga_beli')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Harga Jual</label>
                                    <input
                                     type="number"
                                     class="form-control"
                                     name="harga_jual"
                                     id=""
                                     value="{{ old('harga_jual')}}"
                                     aria-describedy="helpId"
                                     placeholder=""
                                    />
                                    @error('harga_jual')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Stok</label>
                                    <input
                                     type="number"
                                     class="form-control"
                                     name="stok"
                                     id=""
                                     value="{{ old('stok')}}"
                                     aria-describedy="helpId"
                                     placeholder=""
                                    />
                                    @error('stok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection