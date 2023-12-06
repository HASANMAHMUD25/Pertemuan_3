<?php

 $matakuliah = [
    ["kode" => "MK02", "nama" => "Desain Web'eb", "dosen" => "Laisa Nurin"],
    ["kode" => "MK03", "nama" => "PHP Programm Programming", "dosen" => "Nasrul"],
    ["kode" => "MK04", "nama" => "Database", "dosen" => "Edo Riansyah"],
 ];

 $nomor = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Matakuliah</title>
</head>
<body>
    <h1>Daftar Matakuliah</h1>
    <style>
        h1 {
            text-align: center;
        }
    </style>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode MK</th>
                <th>Nama Matakuliah</th>
                <th>Dosen</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matakuliah as $row): ?>
                <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $row['kode'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['dosen'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h5 style="text-align: right;">@ Hasan mahmud..</h5>
</body>
</html>