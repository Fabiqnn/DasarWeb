<?php
function hitungUmur($thn_Lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_Lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum") {
    echo "$salam ";
    echo  "Perkenalkan, nama saya " . $nama . "<br/>";

    echo "Saya berusia " . hitungUmur(2005, 2024). " tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Fabian");
?>