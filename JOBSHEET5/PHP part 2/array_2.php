<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array Dosen</title>
</head>
<body>

<?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];
?>

<h2>Data Dosen</h2>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Nama</th>
        <td><?php echo $Dosen['nama']; ?></td>
    </tr>
    <tr>
        <th>Domisili</th>
        <td><?php echo $Dosen['domisili']; ?></td>
    </tr>
    <tr>
        <th>Jenis Kelamin</th>
        <td><?php echo $Dosen['jenis_kelamin']; ?></td>
    </tr>
</table>

</body>
</html>
