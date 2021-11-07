<?php
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];


if ($panjang == null && $lebar == null) {
    echo "Data error, anda tidak menginputkan nilai sama sekali!";
} else if ($panjang == 0 && $lebar == 0) {
    echo "Luas persegi panjang tidak ada";
} else {
    $luas = $panjang * $lebar;
    echo "Luas persegi panjang adalah = " . $luas;
}
