<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link type="text/css" href="styleAboutUs.css" rel="stylesheet">
    <title>About Us Kogichi</title>
</head>
<body>
    <div class="garis"></div>
    <header>
        <a href="index.php" class="logo">Kogichi</a>
        <nav class="navbar">
            <ul class="menu-links">
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a href="index.php">Menu</a></li>
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

    <div class="kontainer">
        <div class="paragraf-atas">
            <h1>About Us Kogichi</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque perspiciatis rem cum vitae culpa expedita distinctio? Rem quia in, eius voluptatum reiciendis temporibus eligendi? Iusto commodi delectus facere beatae obcaecati!</p>
        </div>
        
        <section class="about">
            <div class="aboutUs-image">
                <img src="img/minh-anh-nguyen-ndnNP_luXvU-unsplash.jpg" alt="mochi">
            </div>
            <div class="konten">
                <h2>Kogichi Adalah</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore veritatis omnis quas blanditiis, <br>
                    distinctio delectus aut ipsam mollitia fuga minima, a voluptatibus consequatur aliquid error nostrum dignissimos commodi <br>
                    tempore magnam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate rem corporis, aut ut earum odio et vel <br>
                    laboriosam possimus molestias esse quam vero perferendis neque cumque fugiat doloremque ullam itaque!</p>
        
                <h4>Our Values</h4>
                <ul>
                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                </ul>
                <h4>Our Values</h4>
                <ul>
                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                </ul>
                <h4>Our Values</h4>
                <ul>
                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                </ul>
                <h4>Our Values</h4>
                <ul>
                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                </ul>
            </div>
        </section>
    </div>
    
</body>
</html>