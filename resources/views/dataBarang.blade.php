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
                    <h3>Data Barang</h3>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
                    </ol>
                </nav>
                <div class="page-content">
                    <section class="section">
                        <div class="card shadow h-md-50">
                            <div class="card-body">
                                <div class="mb-4" align="right">
                                    <a href="kaprodi/CetakPDF" class="btn btn-danger" style="margin-right: 10px;"><i
                                            class="bi bi-file-earmark-pdf-fill"></i> PDF</a>
                                    <a href="kaprodi/Excel" class="btn btn-success"><i
                                            class="bi bi-file-earmark-spreadsheet-fill"> Excel</i></a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr align="center">
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Type</th>
                                                <th>Berat</th>
                                                <th>Lihat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for($i=1; $i<= 10; $i++){
                                        ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td>Epson</td>
                                                <td>Bahan Bakar</td>
                                                <td>2kg</td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-primary block"
                                                        data-bs-toggle="modal" data-bs-target="#backdrop">
                                                        <i class="bi bi-eye-fill"></i> Detail
                                                    </button>
                                                    <div class="modal fade text-left" id="backdrop" tabindex="-1"
                                                        role="dialog" aria-labelledby="myModalLabel4"
                                                        data-bs-backdrop="false" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel4">Detail Barang</h4>
                                                                    <button type="button" class="close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <i data-feather="x">X</i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body" align="left">
                                                                    <Label>Nama Barang</Label>
                                                                    <input type="text" value="ini macam a" class="form-control mb-2" name="Barang" disabled>
                                                                    <Label>Stok Barang</Label>
                                                                    <input type="text" value="200" class="form-control mb-2" name="stokBarang" disabled>
                                                                    <Label>Type</Label>
                                                                    <input type="text" value="APAR" class="form-control mb-2" name="type" disabled>
                                                                    <Label>Deskripsi</Label>
                                                                    <input type="text" value="yo fon linging" class="form-control mb-2" name="deskripsi" disabled>
                                                                    <Label>Berat</Label>
                                                                    <input type="text" value="2KG" class="form-control mb-2" name="berat" disabled>
                                                                    <Label>Harga</Label>
                                                                    <input type="text" value="Ceban" class="form-control mb-2" name="harga" disabled>
                                                                    <Label>Foto</Label><br>
                                                                    <img src="logo/tsa1.png" class="mb-5 mb-lg-2" alt="Logo" style="width: 190px; height: auto" />
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light-secondary"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Close</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td align="center">
                                                    <a href="Admin/Excel" class="btn btn-success"><i
                                                            class="bi bi-file-earmark-spreadsheet-fill"> Excel</i></a>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
