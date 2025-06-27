<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raja Rasa</title>
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

<section class="hero15">
    <div class="hero-content4">
        <h1>Raja Rasa</h1>
        <p>Raja Rasa menyediakan menu-menu yang beragam serta pelanggan dapat bebas memilihnya dengan harga yang terjangkau.</p>
    </div>
</section>

<section class="location-section"> 
    <h2>JAM OPERASIONAL</h2>
    <p>10:00-21:00</p>
    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7736309579545!2d124.90776620000001!3d1.3111855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32871391c69048df%3A0xf38fa79208d4926a!2sSate%2C%20Ayam%20Lalapan%2C%20Ayam%20Bakar%20Raja%20Rasa!5e0!3m2!1sid!2sid!4v1732501807477!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section class="services">
        <h2>Layanan yang tersedia</h2>
            <div class="service-container">
                <div class="service">
                    <img src="images/wms/nasikotak.jpg" alt="Dine-in" class="service-icon">
                        <h3>Pemesanan nasi kotak</h3>
                </div>
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
           ["name" => "Sate Ayam Madura", "price" => "Rp. 18.000", "image" => "images/menuraja/sateayamadura.jpg"],
           ["name" => "Sate Ayam Manis Rica", "price" => "Rp. 18.000", "image" => "images/menuraja/sateayamadura.jpg"],
           ["name" => "Sate Ampela Hati Ayam", "price" => "Rp. 18.000", "image" => "images/menuraja/sateampelahatiayam.jpg"],
           ["name" => "Ayam Lalapan", "price" => "Rp. 18.000", "image" => "images/menuraja/ayamlalapan.jpg"],
           ["name" => "Ayam Bakar Manis Rica", "price" => "Rp. 18.000", "image" => "images/menuraja/ayambakarmanisrica.jpg"],
           ["name" => "Nasi Campur", "price" => "Rp. 18.000", "image" => "images/menuraja/nasicampur.jpg"],
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