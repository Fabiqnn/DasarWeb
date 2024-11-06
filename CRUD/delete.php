<?php
    include 'dbConnect.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $querry = "delete from menu where menu_id = $id";

        $result = sqlsrv_query($conn, $querry);

        if (!$result) {
            die("Tidak berhasil Melakukan Delete". sqlsrv_errors());
        } else {
            header("location: index.php");
        }
        
    }
?>