<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["Nama"];
        $email = $_POST["Email"];

        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email;
    }
?>