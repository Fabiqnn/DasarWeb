<?php include 'dbConnect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <title>CRUD</title>
</head>
<body>
    <header>
        <a href="index.php" class="title">Kogichi</a>
    </header>
    <button onclick="window.location.href='insertForm.html'">Insert Menu</button>
    <table>
        <tr>
            <th>ID Menu</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
        <?php 
            $query = "select * from menu";

            $result = sqlsrv_query($conn, $query);

            if (!$result) {
                die("Query gagal".sqlsrv_errors());
            } else {
                while($row = sqlsrv_fetch_array($result)){
                    ?>
        <tr>
            <td><?php echo $row['menu_id'];?></td>
            <td><?php echo $row['nama_menu'];?></td>
            <td><?php echo $row['harga'];?></td>
        </tr>
                    <?php
                }
            }
            

        ?>
    </table>
</body>
</html>