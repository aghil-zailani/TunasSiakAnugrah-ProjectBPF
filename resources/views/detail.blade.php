
@extends('layouts/main')

@section('container')
<div id="app">
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Detail Barang</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-6 col-lg-6 col-md-6">
                    <div class="card shadow h-md-50">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-10 col-lg-12 col-xl-12 col-xxl-12">
                                    <h3 class="font-extrabold mb-0"><label for="ID Barang">ID Barang : <?= $data['data']['id_barang'] ?></label></h2><br>
                                        <table class="table table-striped nowrap">
                                            <tbody>
                                                <tr>
                                                    <td class="font-extrabold mb-0">Nama Barang </td>
                                                    <td>:</td>
                                                    <td class="text-muted font-semibold"><?= $data['data']['namaBarang'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-extrabold mb-0">Stok Barang </td>
                                                    <td>:</td>
                                                    <td class="text-muted font-semibold"><?= $data['data']['stokBarang'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-extrabold mb-0">Type </td>
                                                    <td>:</td>
                                                    <td class="text-muted font-semibold"><?= $data['data']['type'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-extrabold mb-0">Deskripsi </td>
                                                    <td>:</td>
                                                    <td class="text-muted font-semibold"><?= $data['data']['deskripsi'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-extrabold mb-0">Berat </td>
                                                    <td>:</td>
                                                    <td class="text-muted font-semibold"><?= $data['data']['berat'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-extrabold mb-0">Harga </td>
                                                    <td>:</td>
                                                    <td class="text-muted font-semibold"><?= $data['data']['harga'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="<?= BASEURL ?>/Admin/DataBarang" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-6 col-md-6">
                    <div class="card shadow h-md-50">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-10 col-lg-12 col-xl-12 col-xxl-12">
                                    <h3 class="font-extrabold mb-0"><label for="Foto Barang">Foto Barang</label></h2><br>
                                        <div align="center">
                                            <img src="<?= BASEURL ?>/<?= $data['data']['foto'] ?>" alt="" height="auto" width="50%">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection