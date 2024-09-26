<?php
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo  $salam . ", ";
    echo "Perkenalkan, nama saya" . $nama ."<br>";
    echo "Senang berkenalan dengan anda<br>";
}

perkenalan("Hamdana", "Halo");

echo "<br>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
echo "<br>";

function hitungUmur($tahunLahir, $tahunSekarang) {
    $umur = $tahunSekarang - $tahunLahir;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(2005, 2024) . " tahun"
?>