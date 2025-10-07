<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Aman</title>
</head>
<body>
    <h2>Contoh HTML Injection Aman</h2>

    <form method="post" action="">
        <label>Masukkan teks:</label><br>
        <input type="text" name="input" required>
        <br><br>
        <label>Masukkan email:</label><br>
        <input type="text" name="email" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = isset($_POST['input']) ? $_POST['input'] : '';
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        if ($email === '') {
            echo "<p style='color:red;'>Email kosong.</p>";
        } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_safe = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
            echo "<p>Alamat email valid: $email_safe</p>";
        } else {
            echo "<p style='color:red;'>Alamat email tidak valid!</p>";
        }
        echo "<p>Hasil input yang aman: $input</p>";
    }
    ?>
</body>
</html>
