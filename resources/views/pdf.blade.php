<!DOCTYPE html>
<html>

<head>
    <title>Laporan Transaksi - PT.Tunas Siak Anugrah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h3>PT. Tunas Siak Anugrah</h3>
        <h5>Laporan Transaksi</h5>
    </center>

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
                <th>Status</th>
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
                    <td>{{ $a->jumlahStok }}</td>
                    <td>{{ $a->status }}</td>
                    <td>{{ $a->tanggal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
