<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa lulus: " . implode(", ", $nilaiLulus);
echo "<br><br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ' , $karyawanPengalamanLimaTahun);
echo "<br><br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' =>[
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
echo "<br>";

$nilaiMatematika = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
for ($i=0; $i < count($nilaiMatematika); $i++) {
    $totalNilai += $nilaiMatematika[$i][1];
};

$nilaiRata = $totalNilai / count($nilaiMatematika);
echo "======Siswa yang memiliki nilai diatas rata rata====== <br> 
    ======dengan nilai rata rata: $nilaiRata====== <br>" ;

for ($i=0; $i < count($nilaiMatematika); $i++) { 
    if ($nilaiMatematika[$i][1] > $nilaiRata) {
        echo "Nama: {$nilaiMatematika[$i][0]}, Nilai: {$nilaiMatematika[$i][1]} <br>";
    }
}

?>