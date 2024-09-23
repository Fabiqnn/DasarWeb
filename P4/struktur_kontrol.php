<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <=100) {
    echo "Nilai Huruf: A";
} else if($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai Huruf: B";
} else if($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Huruf: C";
} else if($nilaiNumerik < 70 ) {
    echo "Nilai Huruf: D";
}

echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan ; $i++) { 
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br>";

$semuaNilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($semuaNilaiSiswa);

array_pop($semuaNilaiSiswa);
array_pop($semuaNilaiSiswa);

array_shift($semuaNilaiSiswa);
array_shift($semuaNilaiSiswa);

$jumlahNilai = count($semuaNilaiSiswa);
$totalNilai = 0;

for ($i=0; $i < $jumlahNilai; $i++) { 
    $totalNilai += $semuaNilaiSiswa[$i];
}

$rataRataNilai = $totalNilai / $jumlahNilai;

echo "Rata rata dari nilai adalah: $rataRataNilai";
echo "<br><br>";

$totalBelanja = 120000;
$diskon = 0.20;

if ($totalBelanja > 100000) {
    $totalBelanja = $totalBelanja - ($totalBelanja * $diskon);
    echo "Harga yang harus dibayar pelanggan: $totalBelanja";
} else {
    echo "Harga yang harus dibayar pelanggan: $totalBelanja";
}
echo "<br><br>";

$poin = 600;
echo "Total skor pemain adalah: $poin <br>";

print ($poin > 500) ?
 "Apakah pemain mendapatkan hadiah tambahan: Iya" : "Apakah pemain mendapatkan hadiah tambahan: Tidak";
?>