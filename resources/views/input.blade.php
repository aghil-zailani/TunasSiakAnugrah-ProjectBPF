@extends('layouts/main')

@section('container')
    <!DOCTYPE html>
    <html lang="en">

    <body>
        <div id="app">
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>

                <div class="page-heading">
                    <h3>Input Data Barang</h3>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input Data</li>
                    </ol>
                </nav>
                <div class="page-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow h-md-50">
                                <div class="card-header">
                                    <h4>Masukkan Data</h4>
                                </div>                                
                                <div class="card-body">
                                    <form action="{{ route('input.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label class="form-label">Nama Barang</label>
                                            </div>
                                            <div class="col-md-10 form-group">
                                                <input type="text" class="form-control " name="namaBarang"
                                                    placeholder="Nama Barang" />
                                            </div>

                                            <div class="col-md-2 ">
                                                <label class="form-label">Stok Barang</label>
                                            </div>
                                            <div class="col-md-10 form-group">
                                                <input type="number" class="form-control " name="stokBarang"
                                                    placeholder="Stok Barang" />
                                            </div>

                                            <div class="col-md-2 ">
                                                <label class="form-label">Type</label>
                                            </div>
                                            <div class="col-md-10 form-group">
                                                <select name="type" id="" class="form-control ">
                                                    <option value="" disabled selected>Pilih Type</option>
                                                    <option value="Fire Protection">Fire Protection</option>
                                                    <option value="Racking System">Racking System</option>
                                                </select>
                                            </div>

                                            <div class="col-md-2 ">
                                                <label class="form-label">Deskripsi</label>
                                            </div>
                                            <div class="col-md-10 form-group">
                                                <input type="text" class="form-control " name="deskripsi"
                                                    placeholder="Deskripsi Barang" />
                                            </div>

                                            <div class="col-md-2 ">
                                                <label class="form-label">Berat</label>
                                            </div>
                                            <div class="col-md-10 form-group">
                                                <input type="number" class="form-control " name="berat"
                                                    placeholder="Berat Barang" />
                                            </div>

                                            <div class="col-md-2 ">
                                                <label class="form-label">Harga</label>
                                            </div>
                                            <div class="col-md-10 form-group">
                                                <input type="number" class="form-control " name="harga"
                                                    placeholder="Harga Barang" />
                                            </div>

                                            <div class="col-md-2 ">
                                                <label class="form-label">Foto</label>
                                            </div>
                                            <div class="col-md-10 form-group">
                                                <input type="file" class="form-control " name="foto"
                                                    placeholder="Foto Barang" />
                                            </div>
                                            <div class="col-lg-12 col-sm-12 mb-4">
                                                <input type="submit" class="btn btn-primary btn-rounded px-3 py-2"
                                                    value="Kirim" />
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>

    </html>
@endsection
