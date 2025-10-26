<?php
include "koneksi.php";

$sql = "INSERT INTO user (username, password)
        VALUES ('admin', MD5('123'))";

if (mysqli_query($connect, $sql)) {
    echo "Data berhasil dimasukkan ke tabel user";
} else {
    echo "Error memasukkan data: " . mysqli_error($connect);
}

mysqli_close($connect);
?>
