<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-Barang.xls");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Data Barang</h3>

    <table border="1">
        <thead>
            <tr align="center">
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Type</th>
                <th>Deskripsi</th>
                <th>Berat</th>
                <th>Harga</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $data['data']["namaBarang"]; ?></td>
                <td><?= $data['data']["stokBarang"]; ?></td>
                <td><?= $data['data']["type"]; ?></td>
                <td><?= $data['data']["deskripsi"]; ?></td>
                <td><?= $data['data']["berat"]; ?></td>
                <td><?= $data['data']["harga"]; ?></td>
                <td><img src="<?= BASEURL ?>/<?= $data['data']["foto"] ?>" alt=""></td>
            </tr>
        </tbody>
    </table>
</body>

</html>