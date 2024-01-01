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
                        <li class="breadcrumb-item"><a href="home">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
                    </ol>
                </nav>
                <div class="page-content">
                    <section class="section">
                        <div class="card shadow h-md-50">
                            <div class="card-header">
                                <h4>Data Barang</h4>
                            </div>
                            <div class="card-body">
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
                                            $i = 1;
                                            ?>
                                            @foreach ($barang as $a)
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td>{{ $a->namaBarang }}</td>
                                                    <td>{{ $a->type }}</td>
                                                    <td>{{ $a->berat }} Kg</td>
                                                    <td align="center">
                                                        <a href="#backdrop{{ $a->id }}" class="btn btn-info block"
                                                            data-bs-toggle="modal">
                                                            <i class="bi bi-eye-fill"></i> Detail
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('destroy', $a->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger block">
                                                                <i class="bi bi-trash3-fill"></i> Hapus
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        @if (session('message'))
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Barang Berhasil Dihapus!",
                    timer: 2500
                });
            </script>
        @endif
        @if (session('error'))
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Error!",
                    text: "Barang Gagal Dihapus!",
                    timer: 2500
                });
            </script>
        @endif
    </body>

    </html>

    @foreach ($barang as $b)
        {{-- MODALLLLLLLLL --}}
        <div class="modal fade text-left" id="backdrop{{ $b->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel4" data-bs-backdrop="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel4">Detail Barang
                        </h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x">X</i>
                        </button>
                    </div>
                    <div class="modal-body" align="left">
                        <Label>Nama Barang</Label>
                        <input type="text" value="{{ $b->namaBarang }}" class="form-control mb-2" name="Barang"
                            disabled>
                        <Label>Stok Barang</Label>
                        <input type="text" value="{{ $b->stokBarang }}" class="form-control mb-2" name="stokBarang"
                            disabled>
                        <Label>Type</Label>
                        <input type="text" value="{{ $b->type }}" class="form-control mb-2" name="type" disabled>
                        <Label>Deskripsi</Label>
                        <input type="text" value="{{ $b->deskripsi }}" class="form-control mb-2" name="deskripsi"
                            disabled>
                        <Label>Berat</Label>
                        <input type="text" value="{{ $b->berat }}" class="form-control mb-2" name="berat"
                            disabled>
                        <Label>Harga</Label>
                        <input type="text" value="{{ $b->harga }}" class="form-control mb-2" name="harga"
                            disabled>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
