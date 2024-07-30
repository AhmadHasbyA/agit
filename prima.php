<?php
function isPrime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Contoh penggunaan
$angka = 10; // Ganti dengan angka yang ingin diperiksa
if (isPrime($angka)) {
    echo "$angka adalah bilangan prima.";
} else {
    echo "$angka bukan bilangan prima.";
}
?>
