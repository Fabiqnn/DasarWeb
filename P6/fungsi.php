<?php
function perkenalan($nama, $salam="Assalamualaikum") {
    echo "$salam ";
    echo "Perkenalkan, nama saya ". $nama ."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Hamdana", "Hallo");

echo "<br>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya, $ucapanSalam);

echo "<br>";

perkenalan($saya);
echo "<br>";


function hitungUmur($thn_lhr, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lhr;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(2005, 2024);
?>