<?php
$poin = 560; // contoh poin yang diperoleh pemain

echo "Total skor pemain adalah: $poin <br>";

// pakai operator ternary
$hadiah = ($poin > 500) ? "YA" : "TIDAK";

echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";
?>
