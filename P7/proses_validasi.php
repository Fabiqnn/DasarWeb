<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $errors = array();

        //validasi nama
        if (empty($nama)) {
            $errors[] = "Nama harus diisi.";
        }

        //validasi email
        if (empty($email)) {
            $errors[] = "Email harus diisi.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Format email tidak valid.";
        }

        //validasi password
        if (empty($password)) {
            $errors[] = "Password harus diisi.";
        } else if (strlen($password) < 8){
            $errors[] = "Password harus memiliki minimal 8 karakter";
        }
        

        //Jika ada kesalahan validasi
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        } else {
            // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
            // Misalnya, menyimpan data ke database atau mengirim email
            echo "Data berhasil Nama = $nama, Email = $email";   
        }
        
        
    }
?>