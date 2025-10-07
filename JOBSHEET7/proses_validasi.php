<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    if (empty($nama) || empty($email)) {
        echo "Data tidak lengkap!";
    } else {
        echo "Data berhasil diterima:\nNama: $nama\nEmail: $email";
    }
}
?>
