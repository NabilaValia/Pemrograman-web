<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
    <?php
         if (isset($_SESSION["favcolor"]) && isset($_SESSION["favanimal"])) {
            echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
         echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
        } else {
            echo "Session belum dibuat. Jalankan sessionCreate.php dulu.";
        }
        ?>
    </body>
</html>
