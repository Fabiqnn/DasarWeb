<?php
    if (isset($_POST['submit'])) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES['myFile']['name']);

        if (move_uploaded_file($_FILES['myFile']['tmp_name'], $targetFile)) {
            echo "FIle berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
        
    } 
?>