<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Perum</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
<header>
        <div class="logo-container">
            <a href="index.php" class="logo-link">
                <img src="images/logoeksplorasikuliner.png" alt="Logo Eksplorasi Kuliner" class="logo">
                <span class="site-name">Eksplorasi Kuliner</span>
            </a>
        </div>
            <ul class="nav-menu">
                <li><a href="index.php" class="nav-btn">Home</a></li>
                <li><a href="destinasi.php" class="nav-btn">Destinasi</a></li>
                </div>
            </ul>
        </nav>
        <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
         </div>
    </header>

<section class="hero5">
    <div class="hero-content3">
        <h1>Warung Perum</h1>
        <p>Warung Perum menyediakan menu-menu dengan harga yang terjangkau dengan rasa yang enak, lokasinya yang berada di sekitar area Perum Blok A menjadikan Warung Perum sebagai pilihan yang tepat untuk menu makan pagi sampai malam.  </p>
    </div>
</section>

<section class="location-section"> 
    <h2>JAM OPERASIONAL</h2>
    <p>06:00-21:00</p>
    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.2103097244435!2d124.87525046953283!3d1.2680468999199974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3287153a2c333ce9%3A0x45066763334361cc!2sTataaran%20Patar%2C%20Kec.%20Tondano%20Sel.%2C%20Kabupaten%20Minahasa%2C%20Sulawesi%20Utara!5e0!3m2!1sid!2sid!4v1731473691638!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section class="services">
        <h2>Layanan yang tersedia</h2>
        <div class="service-container">
            <div class="service">
                <img src="images/bungkus.webp" alt="bungkus" class="service-icon">
                    <h3>Bungkus</h3>
            </div>
            <div class="service">
                <img src="images/makan.jpg" alt="Makan di tempat" class="service-icon">
                    <h3>Makan di tempat</h3>
            </div>
        </div>
</section>

<section class="menu-section">
    <h4>Menu</h4>
    <div class="menu">
        <?php 
        $menu = [
           ["name" => "Ikan Sambal Goreng", "price" => "Rp. 7.000", "image" => "images/menuperum/ikangorengsambal.jpg"],
           ["name" => "Ikan Goreng", "price" => "Rp. 7.000", "image" => "images/menuperum/ikangoreng.jpg"],
           ["name" => "Ayam Lalapan", "price" => "Rp. 25.000", "image" => "images/menuperum/ayamlalapan.jpg"],
           ["name" => "Nasi Kuning", "price" => "Rp. 13.000", "image" => "images/menuperum/nasikuning.jpg"],
           ["name" => "Mie Ceplok + Nasi", "price" => "Rp. 15.000", "image" => "images/menuperum/mieceploknasi.jpg"],
           ["name" => "Tahu Tempe", "price" => "Rp. 10.000", "image" => "images/menuperum/tahutempe.jpg"],
        ];
        foreach ($menu as $food) {
            echo '<div class="menu-item">
             <img src="'.$food['image'].'" alt="'.$food['name'].'">
             <h3>'.$food['name'].'</h3>
            <p>'.$food['price'].'</p>
            </div>';
        }
        ?>
</div>
</section>
<footer><p>&copy; 2024 Eksplorasi Kuliner | All rights reserved.</p></footer>
<script>
    feather.replace()
</script>
<script src="js/script.js"></script>
</body>
</html>