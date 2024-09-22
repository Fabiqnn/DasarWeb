<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$a += $b;
$a -= $b;

echo "Operasi Matematika dari a: {$a} dan b: {$b} <br><br>";

echo "Hasil Tambah: {$hasilTambah} <br> Hasil Kurang: {$hasilKurang} <br> Hasil Kali: {$hasilKali}
    <br> Hasil Bagi: {$hasilBagi} <br> Sisa Bagi: {$sisaBagi} <br> Pangkat: {$pangkat} <br><br>";

echo "Hasil Sama: {$hasilSama} <br> Hasil Tidak Sama: {$hasilTidakSama} <br> Hasil Lebih Kecil: 
    {$hasilLebihKecil} <br> Hasil Lebih Besar : {$hasilLebihBesar} <br> Hasil Lebih Kecil Sama: 
    {$hasilLebihKecilSama} <br> Hasil Lebih Besar Sama: {$hasilLebihBesarSama} <br><br>";

echo "Hasil And: {$hasilAnd} <br> Hasil Or: {$hasilOr} <br> Hasil Not A: {$hasilNotA} <br> Hasil Not B: {$hasilNotB} <br><br>";

echo "a (a += b): " . $a += $b , "<br>";
echo "a (a -= b): " . $a -= $b , "<br>";
echo "a (a *= b): " . $a *= $b , "<br>";
echo "a (a /= b): " . $a /= $b , "<br>";
echo "a (a %= b): " . $a %= $b , "<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik: {$hasilIdentik} <br> Hasil Tidak Identik: {$hasilTidakIdentik} <br><br>";

$kursi = 45;
$kursiTerpakai = 28;
$persentaseKosong = ($kursiTerpakai / $kursi) * 100;
echo "Sebuah restoran memiliki 45 kursi, 28 kursi terpakai. Persentase kursi kosong : " 
    . number_format($persentaseKosong, 1) , "%";
?>