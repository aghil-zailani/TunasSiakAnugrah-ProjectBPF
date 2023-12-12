@extends('layouts/main')

@section('container')
    <!DOCTYPE html>
    <html lang="en">

    <body>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Dashboard</h3>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card shadow h-md-50">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <div class="stats-icon purple mb-2">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                                <div class="mx-4">
                                                    <h6 class="text-muted font-semibold">Manajement Barang</h6>
                                                    <a href="BarangMasuk" class="btn btn-success" style="margin-right:5px;">
                                                        <i class="bi bi-clipboard-plus-fill"></i> Stok  Barang
                                                    </a>
                                                    <a href="#" class="btn btn-danger">
                                                        <i class="bi bi-clipboard-minus-fill"></i> Barang Keluar
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                    
                        <div class="row">
                            <div class="col-12 col-lg-9">
                                <div class="card shadow h-md-50">
                                    <div class="card-header">
                                        <h4 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-border">Grafik Penjualan Barang</span>
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chartdiv"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card shadow h-md-50">
                                    <div class="card-header">
                                        <h4>Presentase Penggunaan Jasa</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="piechartdiv"></div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-12 col-lg-4">
                                <div class="card shadow h-95">
                                    <div class="card-header">
                                        <h4>Kotak Pesan</h4>
                                    </div>
                                    <div class="card-body mb-2 overflow-auto">
                                        <div class="overflow" style="max-height: 160px; overflow: auto;">
                                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                                <div class="flex-grow-1 mx-5">
                                                    <h3 class="text-gray-800 text-hover-primary fw-bolder fs-6">Pesan Masuk
                                                    </h3>
                                                    <span class="text-muted fw-bold d-block">T.Said Aghil Zailani melakukan
                                                        pengiriman pesan </span>
                                                </div>
                                                <span class="badge badge-secondary fs-8 fw-bolder fst-italic"
                                                    style="color: grey;">21-August-2023 16:21:32</span>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-12 col-lg-8">
                                <div class="card shadow h-md-50">
                                    <div class="card-header">
                                        <h4 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-border">Grafik Stock Barang</span>
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chartstock"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="card shadow h-95">
                                    <div class="card-header">
                                        <h4>Kotak Pesan</h4>
                                    </div>
                                    <div class="card-body mb-2 overflow-auto">
                                        <div class="overflow" style="max-height: 160px; overflow: auto;">
                                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                                <div class="flex-grow-1 mx-5">
                                                    <h3 class="text-gray-800 text-hover-primary fw-bolder fs-6">Pesan Masuk
                                                    </h3>
                                                    <span class="text-muted fw-bold d-block">T.Said Aghil Zailani melakukan
                                                        pengiriman pesan </span>
                                                </div>
                                                <span class="badge badge-secondary fs-8 fw-bolder fst-italic"
                                                    style="color: grey;">21-August-2023 16:21:32</span>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>

        <footer>
            <div class="footer clearfix mb-0 text-muted text-center">
                <p>Tunas Siak Anugrah &copy; | 2023</p>
            </div>
        </footer>
        </div>

    </body>

    </html>
@endsection
