<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <title> Halaman Utama </title>
</head>
<body>
    <header>
        <a href="#" class="logo">Kogichi</a>
        <nav class="navbar">
            <ul class="menu-links">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Menu</a></li>
                <li>
                    <a href="#">Order <span id="jmlhOrder">0</span></a>
                </li>
            </ul>
        </nav>
        <?php if (isset($_SESSION['status'])): ?>
            <?php if($_SESSION['status'] == 'login'): ?>
                <?php echo "<span class = 'username'>Selamat Datang, " . $_SESSION['username'] . "</span>" ?>
            <?php endif; ?>
        <?php else: ?>
            <a class="sign-in" href="formLogin.html"><button class="masuk">Masuk</button></a>
        <?php endif;?>
    </header>

    <h1 id="section">Menu</h1>
    <div class="list-makanan">
            <div class="box">
                <div class="image"><img src="img/Menu-Img/Pizza Dough recipe – best ever homemade pizza!.jpeg" alt=""></div>
                <h3>Pepperoni Pizza</h3>
                <div class="nama-menu">
                    <p>Rp 50.000</p>
                    <button class="add" onclick="tambahKeranjang()">Masukkan Keranjang</button>
                </div>
            </div>
            <div class="box">
                <div class="image"><img src="img/Menu-Img/Classic Spaghetti Carbonara Recipe.jpeg" alt=""></div>
                <h3>Spagetti Carbonara</h3>
                <div class="nama-menu">
                    <p>Rp 25.000</p>
                    <button class="add" onclick="tambahKeranjang()">Masukkan Keranjang</button>
                </div>
            </div>
            <div class="box">
                <div class="image"><img src="img/Menu-Img/Easy Mochi Recipe_ How To Make Mochi In A Microwave Or Steamer.jpeg" alt=""></div>
                <h3>Mochi</h3>
                <div class="nama-menu">
                    <p>Rp 15.000</p>
                    <button class="add" onclick="tambahKeranjang()">Masukkan Keranjang</button>
                </div>
            </div>
            <div class="box">
                <div class="image"><img src="img/Menu-Img/Recipe for Chicken Parmesan - House of Nash Eats.jpeg" alt=""></div>
                <h3>Chicken Parm</h3>
                <div class="nama-menu">
                    <p>Rp 35.000</p>
                    <button class="add" onclick="tambahKeranjang()">Masukkan Keranjang</button>
                </div>
            </div>
    </div>

    <script>
        function tambahKeranjang() {
            <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 'login'):?>
                const jumlahOrder = document.getElementById('jmlhOrder');
                let currentOrder = parseInt(jumlahOrder.innerText);
                let jumlah = currentOrder + 1;
                jumlahOrder.innerHTML = jumlah;
            <?php else :?>
                alert("Masuk Terlebih Dahulu Untuk Melakukan Pemesanan!")
            <?php endif;?>
        }
    </script>
</body>
</html>