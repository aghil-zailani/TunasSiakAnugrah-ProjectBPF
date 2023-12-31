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
                    <h3>Barang Keluar</h3>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Barang Keluar</li>
                    </ol>
                </nav>
                <div class="page-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow h-md-50">
                                <div class="card-header">
                                    <h4>Data Barang Keluar</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr align="center">
                                                    <th>No</th>
                                                    <th>Nama Barang</th>
                                                    <th>Type</th>
                                                    <th>Stok Barang</th>
                                                    <th>Kurang Stok</th>                                                    
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($barang as $a)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $a->namaBarang }}</td>
                                                        <td>{{ $a->type }}</td>
                                                        <td>{{ $a->stokBarang }}</td>
                                                        <td align="center">
                                                            <a href="#myModalLabel4{{ $a->id }}" type="button"
                                                                class="btn btn-danger block" data-bs-toggle="modal">
                                                                <i class="bi bi-file-earmark-spreadsheet-fill"> Kurang
                                                                    Stok</i>
                                                            </a>
                                                        </td>
                                                        <td align="center">
                                                            <a href="#backdrop{{ $a->id }}" type="button"
                                                                class="btn btn-info block" data-bs-toggle="modal">
                                                                <i class="bi bi-eye-fill"></i> Detail
                                                            </a>
                                                        </td>                                                        
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
                @if (session('message'))
                    <script>
                        Swal.fire({
                            icon: "success",
                            title: "Success!",
                            text: "Stok Barang Telah Berkurang!",
                            timer: 2500
                        });
                    </script>
                @endif
                @if (session('stok'))
                    <script>
                        Swal.fire({
                            icon: "error",
                            title: "Error!",
                            text: "Mohon Isi Jumlah Stok!",
                            timer: 2500
                        });
                    </script>
                @endif
                @if (session('tanggal'))
                    <script>
                        Swal.fire({
                            icon: "error",
                            title: "Error!",
                            text: "Mohon Isi Tanggal!",
                            timer: 2500
                        });
                    </script>
                @endif
                @if (session('kosong'))
                    <script>
                        Swal.fire({
                            icon: "error",
                            title: "Error!",
                            text: "Mohon Isi Jumlah Stok dan Tanggal!",
                            timer: 2500
                        });
                    </script>
                @endif
            </div>
        </div>
        </div>
    </body>

    </html>

    @foreach ($barang as $b)
        <div class="modal fade text-left" id="myModalLabel4{{ $b->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel4" data-bs-backdrop="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel4">
                            Barang Keluar</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x">X</i>
                        </button>
                    </div>
                    <form action="/barangKeluar/store/{{ $b->id }}" method="POST">
                        @csrf
                        <div class="modal-body" align="left">
                            <Label>Nama Barang</Label>
                            <input type="text" value="{{ $b->namaBarang }}" class="form-control mb-2" name="namaBarang"
                                readonly>
                            <Label>Stok Barang</Label>
                            <input type="text" value="{{ $b->stokBarang }}" class="form-control mb-2" name="stokBarang"
                                readonly>
                            <Label>Stok Barang Keluar</Label>
                            <input type="text" class="form-control mb-2" name="jumlahStok">
                            <Label>Tanggal</Label>
                            <input type="date" class="form-control mb-2" name="tanggal">
                            <Label>Type</Label>
                            <input type="text" value="{{ $b->type }}" class="form-control mb-2" name="type"
                                readonly>
                            <Label>Deskripsi</Label>
                            <input type="text" value="{{ $b->deskripsi }}" class="form-control mb-2" name="deskripsi"
                                readonly>
                            <Label>Berat</Label>
                            <input type="text" value="{{ $b->berat }} Kg" class="form-control mb-2" name="berat"
                                readonly>
                            <Label>Harga</Label>
                            <input type="text" value="Rp.{{ $b->harga }}" class="form-control mb-2" name="harga"
                                readonly>
                            <input type="text" value="Out" class="form-control mb-2" name="status" hidden readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Submit</span>
                            </button>
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($barang as $c)
        {{-- MODALLLLLLLLL --}}
        <div class="modal fade text-left" id="backdrop{{ $c->id }}" tabindex="-1" role="dialog"
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
                        <input type="text" value="{{ $c->namaBarang }}" class="form-control mb-2" name="Barang"
                            disabled>
                        <Label>Stok Barang</Label>
                        <input type="text" value="{{ $c->stokBarang }}" class="form-control mb-2" name="stokBarang"
                            disabled>
                        <Label>Type</Label>
                        <input type="text" value="{{ $c->type }}" class="form-control mb-2" name="type"
                            disabled>
                        <Label>Deskripsi</Label>
                        <input type="text" value="{{ $c->deskripsi }}" class="form-control mb-2" name="deskripsi"
                            disabled>
                        <Label>Berat</Label>
                        <input type="text" value="{{ $c->berat }}" class="form-control mb-2" name="berat"
                            disabled>
                        <Label>Harga</Label>
                        <input type="text" value="{{ $c->harga }}" class="form-control mb-2" name="harga"
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
