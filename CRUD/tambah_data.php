<?php
include 'dbConnect.php';
    if (isset($_POST['tambah-menu'])) {
        $namaMenu = $_POST['nama'];
        $desc = $_POST['deskripsi'];
        $harga = $_POST['harga'];

        $querry = "insert into menu (nama_menu, deskripsi_menu, harga) values ('$namaMenu', '$desc', '$harga')";

        $result = sqlsrv_query($conn, $querry);

        if (!$ressult) {
            die("Terdapat Error". sqlsrv_errors());
        } else {
            header("location: index.php");
        }
        
    }
?>