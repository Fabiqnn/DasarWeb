<?php
    $username = $_POST['user'];
    $noMeja = $_POST['no-meja'];
    $validateAkun = false;

    $akun = array(
        array('A1', 'A2', 'A3', 'A4', 'A5'),
        array('B1', 'B2', 'B3', 'B4', 'B5'),
        array('C1', 'C2', 'C3', 'C4', 'C5'),
        array('D1', 'D2', 'D3', 'D4', 'D5'),
        array('E1', 'E2', 'E3', 'E4', 'E5')
    );

    for ($i=0; $i < count($akun); $i++) { 
        for ($j=0; $j < count($akun[$i]); $j++) { 
            if ($noMeja == $akun[$i][$j]) {
                $validateAkun = true;
                break 2;
            }
        }
    }

    if ($validateAkun == false) {
        echo "<script>
        alert ('No Meja yang Anda Masukkan Tidak Terdaftar!');
        window.location.href = 'formLogin.html';
        </script>";
    } else {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header("Location: index.php");
    }
?>