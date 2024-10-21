<?php
    if (isset($_FILES['files'])) {
        
        $file_type = $_FILES['files']['type'];
        $extensions = array("jpg", "jpeg", "png", "gif");        
        
        if ($_FILES['files']['name'][0]) {
            $totalFiles = count($_FILES['files']['name']);
            
            for ($i=0; $i < $totalFiles; $i++) { 
                $file_size = $_FILES['files']['size'][$i];
                $file_ext = strtolower(pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION));
                $file_name = $_FILES['files']['name'][$i];
                $file_tmp = $_FILES['files']['tmp_name'][$i];

                $fileErrors = array();

                if (in_array($file_ext, $extensions) === false) {
                    $fileErrors[] = "Ekstensi files $file_name yang diizinkan adalah jpg, .jpeg, .png, .gif <br>";
                }

                if ($file_size > 2097152) {
                    $fileErrors[] = "Ukuran files $file_name tidak boleh lebih dari 2 MB <br>";
                }

                if (empty($fileErrors) ==  true) {
                    if (move_uploaded_file($file_tmp, "documents/" . $file_name)) {
                        echo "File $file_name berhasil diunggah. <br>";
                    } else {
                        echo "Gagal Mengunggah File <br>";
                    }
                } else {
                    echo implode(" ", $fileErrors);
                }
            }
        } else {
            echo "Tidak ada file yang diunggah.";
        }
    }
?>