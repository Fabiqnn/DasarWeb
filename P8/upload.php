<?php
    if (isset($_POST['submit'])) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES['myFile']['name']);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowesExtensions = array("jpg", "jpeg", "png", "gif");
        $maxSize = 5*1024*1024;

        if (in_array($fileType, $allowesExtensions) && $_FILES['myFile']['size'] <= $maxSize) {
            if (move_uploaded_file($_FILES['myFile']['tmp_name'], $targetFile)) {
                echo "File berhasil diunggah.";
            } else {
                echo "Gagal mengunggah file";
            }
        } else {
            echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    } 
?>