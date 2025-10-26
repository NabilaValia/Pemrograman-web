<html>
<head>
</head>
<body>
<?php
session_start();

if($_SESSION['status'] == "login"){
    echo "Selamat datang " . $_SESSION['username'];
    echo "<a href='sessionLogout.php'> Log Out </a>";
}else{
    echo "Anda belum login. Silahkan ";
    echo "<a href='sessionLoginForm.html'> Log In</a>";
}
?>
</body>
</html>
