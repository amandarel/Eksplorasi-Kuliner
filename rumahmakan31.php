<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Makan Om Ody</title>
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

<section class="hero11">
    <div class="hero-content3">
        <h1>Rumah Makan Om Ody</h1>
        <p>Rumah Makan Om Ody menyediakan menu-menu yang murah dan enak, lokasinya yang berada di sekitar area perkantoran menjadikannya sebagai pilihan yang tepat untuk menu makan siang.</p>
    </div>
</section>

<section class="location-section"> 
    <h2>JAM OPERASIONAL</h2>
    <p>09:00-15:00</p>
    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.76829412566!2d124.90879647472451!3d1.3145304986729962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x328713b1b86de88b%3A0x70a25b9f4793ea7b!2sRM.Cakalang%20Gedi%20Om%20Ody!5e0!3m2!1sen!2sid!4v1732109312537!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
           ["name" => "Paket Nasi Cakalang Sayur", "price" => "Rp. 33.000", "image" => "images/menuomody/paket.jpg"],
           ["name" => "Mie Kuah Cakalang", "price" => "Rp. 20.000", "image" => "images/menusemoga/miekuahcakalang.jpeg"],
           ["name" => "Miedal", "price" => "Rp. 10.000", "image" => "images/menuomody/tinutuan.jpg"],
           ["name" => "Gohu", "price" => "Rp. 10.000", "image" => "images/menuomody/gohu.jpg"],
           ["name" => "Nutrisari", "price" => "Rp. 7.000", "image" => "images/menuomody/nutrisari.jpeg"],
           ["name" => "Teh Gula", "price" => "Rp. 7.000", "image" => "images/menuomody/tehka.jpeg"],
           ["name" => "Kopi Hitam", "price" => "Rp. 10.000", "image" => "images/menuomody/kopi.jpeg"],
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
</section>

<div class="whatsapp-button">
        <a href="https://wa.me/6285240207003" target="_blank">
            <img src="images/icon2.png" alt="Chat via WhatsApp">
        </a>
</div>

<footer><p>&copy; 2024 Eksplorasi Kuliner | All rights reserved.</p></footer>
<script>
    feather.replace()
</script>
<script src="js/script.js"></script>
</body>
</html>