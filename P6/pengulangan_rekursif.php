<?php
    function tampilkanAnga(int $jumlah, int $index = 1) {
        echo "Perulangan ke-{$index} <br>";

        if ($index < $jumlah) {
            tampilkanAnga($jumlah, $index + 1);
        }
    }

    tampilkanAnga(20);
?>