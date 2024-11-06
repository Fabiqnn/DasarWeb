<?php include 'dbConnect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Update Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Montserrat", sans-serif;
        }

        html, body {
            width: 100%;
            height: 100%;
            background-color: #f1f1f1;
        }

        header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 30px 10%;
            background-color: rgba(154, 126, 111, 0.542);
            box-shadow: 0 10px 5px -10px rgba(0, 0, 0, 0.3);
        }

        header .logo {
            color: #54473F;
            font-size: 25px;
            text-decoration: none;
            font-weight: 500;
            margin-right: auto;
        }

        .box1 {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .garis {
            height: 10px;
            background-color: rgb(154, 126, 111);
            width: 100%;
        }

        .form {
            background: white;
            display: flex;
            flex-direction: column;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            padding: 30px;
        }

        .form h4 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .form-group input {
            width: 100%;
            height: 40px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: #8a7f4e;
            outline: none;
        }

        .form-group button {
            background-color: #8a7f4e;
            color: white;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: rgba(138, 127, 78, 0.8);
        }

    </style>
</head>
<body>
    <div class="garis"></div>
    <header>
        <a href="index.php" class="logo">Kogichi</a>
    </header>
    <div class="box1">

    <?php 
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $querry = "select * from menu where menu_id =$id";

            $result = sqlsrv_query($conn, $querry);

            if (!$result) {
                die("Querry Gagal Dijalankan". sqlsrv_errors());
            } 

            $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

            if ($row == null) {
                die("gaonok");
            }
            
        }
    ?>

        <div class="form">
            <h4>Update Data Menu</h4>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="nama">Nama Menu</label>
                    <input type="text" name="nama" id="nama" class="kontrol" value="<?php echo $row['nama_menu'] ?>">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Menu</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="kontrol" value="<?php echo $row['deskripsi_menu'] ?>">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" class="kontrol" value="<?php echo $row['harga'] ?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="update">Update Menu</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
