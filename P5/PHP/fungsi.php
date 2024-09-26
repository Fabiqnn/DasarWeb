<?php
function hitungUmur($tahunLahir, $tahunSekarang) {
    $umur = $tahunSekarang - $tahunLahir;
    return $umur;
};

function perkenalan($nama, $salam = "Assalamualaikum") {
    echo "$salam" . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    
    echo "Saya berusia " . hitungUmur(2005, 2024) . " tahun<br>";
    echo "Senang berkenalan dengan anda";
}

perkenalan("Fabian");
?>