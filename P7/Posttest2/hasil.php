<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['Nama'];
        $asal = $_POST['Asal'];
        $nim = $_POST['NIM'];
        
        for ($i=0; $i < count($nama); $i++) { 
            echo "=============================<br>"; 
            echo "Nama\t: " . $nama[$i] . "<br>";
            echo "Asal Kota : " . $asal[$i] . "<br>";
            echo "NIM\t: " . $nim[$i] . "<br>";
        }
    }
?>