<?php include 'dbConnect.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <title>CRUD</title>
</head>

<body>
    <header>
        <a href="index.php" class="title">Kogichi</a>
    </header>
    <div class="box1">
        <h2>Menu Restoran</h2>
        <button data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Menu</button>
        <table>
            <tr>
                <th>ID Menu</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
            </tr>
            <?php
            $query = "select * from menu";

            $result = sqlsrv_query($conn, $query);

            if (!$result) {
                die("Query gagal" . sqlsrv_errors());
            } else {
                while ($row = sqlsrv_fetch_array($result)) {
            ?>
                    <tr>
                        <td><?php echo $row['menu_id']; ?></td>
                        <td><?php echo $row['nama_menu']; ?></td>
                        <td><?php echo $row['deskripsi_menu']?></td>
                        <td><?php echo $row['harga']; ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>

    <!-- Modal -->
    <form action="">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form">
                                <div class="form-group">
                                    <label for="nama">Nama Menu</label> 
                                    <input type="text" name="nama" class="kontrol"> 
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Menu</label> 
                                    <input type="text" name="deskripsi" class="kontrol"> 
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label> 
                                    <input type="text" name="harga" class="kontrol"> 
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="tambah-menu">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>