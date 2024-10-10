<?php
    $data = array("Nama" => "Jane", "Usia" => 25);
    if (isset($data['Nama'])) {
        echo "Nama: " . $data['Nama'];
    } else {
        echo "Variable 'nama; tidak ditemukan dalam array.";
    }
    
    echo "<br>";
    
    if (isset($data['Usia']) && $data['Usia'] >= 18) {
        echo "Anda sudah dewasa.";
    } else {
        echo "Anda belum dewasa atau variable 'umur' tidak ditemukan.";
    }
    
?>