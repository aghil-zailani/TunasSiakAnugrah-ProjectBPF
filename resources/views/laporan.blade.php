@extends('layouts.main')

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
                    <h3>Summary</h3>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Summary</li>
                    </ol>
                </nav>
                <div class="page-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow h-md-50">
                                <div class="card-body">
                                    <div class="mb-4" align="right">
                                        <a href="summary/exportPDF" class="btn btn-danger"><i
                                            class="bi bi-file-earmark-pdf-fill"> PDF</i></a>
                                        <a href="summary/exportExcel" class="btn btn-success"><i
                                                class="bi bi-file-earmark-spreadsheet-fill"> Excel</i></a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr align="center">
                                                    <th>No</th>
                                                    <th>Nama Barang</th>
                                                    <th>Type</th>
                                                    <th>Stok Barang</th>
                                                    <th>Deskripsi</th>
                                                    <th>Berat</th>
                                                    <th>Harga</th>
                                                    <th>Jumlah Stok</th>                                                
                                                    <th>Total Stok</th>                                                
                                                    <th>Tanggal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($barang as $a)                                                
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $a->namaBarang }}</td>
                                                        <td>{{ $a->type }}</td>
                                                        <td>{{ $a->stokBarang }}</td>
                                                        <td>{{ $a->deskripsi }}</td>
                                                        <td>{{ $a->berat }}</td>
                                                        <td>{{ $a->harga }}</td>
                                                        <td>
                                                            @if ($a->status == "In" )
                                                                {{ $a->jumlahStok }} <i class="bi bi-arrow-down-circle-fill" style="color:green;"></i>
                                                            @else
                                                                {{ $a->jumlahStok }} <i class="bi bi-arrow-up-circle-fill" style="color:red;"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($a->status == "In" )
                                                                {{ $a->stokBarang + $a->jumlahStok }}
                                                            @else
                                                                {{ $a->stokBarang - $a->jumlahStok }}
                                                            @endif
                                                        </td>
                                                        <td>{{ $a->tanggal }}</td>
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
            </div>
        </div>
        </div>
    </body>

    </html>
@endsection
