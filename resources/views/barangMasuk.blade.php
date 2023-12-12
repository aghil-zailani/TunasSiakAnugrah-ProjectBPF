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
                    <h3>Input Stok Barang</h3>
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
                                                <select name="namaBarang" id="" class="form-control">
                                                    <option value="" selected disabled>Pilih Barang</option>
                                                    <option value="APAR">APAR/APAB</option>
                                                    <option value="Fire Alarm System">Fire Alarm System</option>
                                                    <option value="Fire Hydrant System">Fire Hydrant System</option>                                                    
                                                    <option value="Fire Hose">Fire Hose</option>
                                                    <option value="Fire Hose Coupling">Fire Hose Coupling</option>
                                                    <option value="Hose Reel">Hose Reel</option>
                                                    <option value="Foam Tank & Hose Reel">Foam Tank & Hose Reel</option>
                                                    <option value="Nozzle">Nozzle</option>
                                                    <option value="In-Line Foam Eductor">In-Line Foam Eductor</option>
                                                    <option value="Fire Monitor">Fire Monitor</option>
                                                    <option value="Master Stream Nozzle">Master Stream Nozzle</option>
                                                    <option value="Water Power Oscilating Monitor">Water Power Oscilating Monitor</option>  
                                                    <option value="Fire Pump">Fire Pump</option>
                                                    <option value="CAFS">CAFS (Compress Air Foam System)</option>
                                                    <option value="Foam Trailer">Foam Trailer</option>
                                                    <option value="Pompa Apung">Pompa Apung</option>
                                                    <option value="Self Brathing Apparatus SCBA">Self Brathing Apparatus SCBA</option>
                                                    <option value="Compressor AirComp SCBA">Compressor AirComp SCBA</option>
                                                    <option value="Foam Concentrate AFFF">Foam Concentrate AFFF</option>
                                                    <option value="Foam Troly">Foam Troly</option>
                                                    <option value="Racking Support Gudang">Racking Support Gudang</option>
                                                    <option value="Racking Warehouse">Racking Warehouse</option>
                                                    <option value="Medium Duty Shelving Racking & Light Duty">Medium Duty Shelving Racking & Light Duty</option>
                                                    <option value="Mezzanine/Multitier Racking + Mezzanine Floor">Mezzanine/Multitier Racking + Mezzanine Floor</option>
                                                </select>
                                            </div>

                                            <div class="col-md-2 ">
                                                <label class="form-label">Stok Barang</label>
                                            </div>
                                            <div class="col-md-10 form-group">
                                                <input type="number" class="form-control " name="stokBarang" placeholder="Tambah Stok Barang" />
                                            </div>

                                            <div class="col-md-2 ">
                                                <label class="form-label">Type</label>
                                            </div>
                                            <div class="col-md-10 form-group">
                                                <input type="text" name="type" class="form-control" value="Fire Protection" id="" disabled>
                                            </div>

                                            <div class="col-md-2 ">
                                                <label class="form-label">Deskripsi</label>
                                            </div>
                                            <div class="col-md-10 form-group">
                                                <input type="text" class="form-control" value="ini apar" name="deskripsi" disabled />
                                            </div>

                                            <div class="col-md-2 ">
                                                <label class="form-label">Berat</label>
                                            </div>
                                            <div class="col-md-10 form-group">
                                                <input type="text" class="form-control" name="berat" value="2KG" disabled />
                                            </div>

                                            <div class="col-md-2 ">
                                                <label class="form-label">Harga</label>
                                            </div>
                                            <div class="col-md-10 form-group">
                                                <input type="text" class="form-control " name="harga" value="Rp.50.000" disabled/>
                                            </div>

                                            <div class="col-md-2 ">
                                                <label class="form-label">Foto</label>
                                            </div>
                                            <div class="col-md-10 form-group">
                                                <img src="logo/tsa1.png" class="mb-5 mb-lg-2" alt="Logo" style="width: 190px; height: auto" />
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
