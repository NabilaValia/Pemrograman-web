<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "documents/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        // Ambil ekstensi file dan ubah ke huruf kecil
        $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Tentukan ekstensi yang diperbolehkan
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        // Periksa apakah file termasuk gambar
        if (in_array($fileExtension, $allowedExtensions)) {
            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File gambar <b>$fileName</b> berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah gambar <b>$fileName</b>.<br>";
            }
        } else {
            echo "File <b>$fileName</b> ditolak karena bukan file gambar.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
