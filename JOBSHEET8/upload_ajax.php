<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");

    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp  = $_FILES['file']['tmp_name'];
    $file_ext  = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    if (!in_array($file_ext, $allowed_extensions)) {
        $errors[] = "File $file_name memiliki ekstensi tidak diizinkan.";
    }

    if ($file_size > 2097152) {
        $errors[] = "File $file_name melebihi ukuran 2 MB.";
    }

    if (empty($errors)) {
        if (move_uploaded_file($file_tmp, "documents/" . $file_name)) {
            echo "File $file_name berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file $file_name.";
        }
    } else {
        echo implode("<br>", $errors);
    }
}
?>
