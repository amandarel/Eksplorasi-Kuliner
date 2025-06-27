<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Makan Araya</title>
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

<section class="hero4">
    <div class="hero-content3">
        <h1>Warung Makan Araya</h1>
        <p>Warung Makan Araya adalah usaha kuliner yang didirikan dengan tujuan untuk memenuhi kebutuhan Masyarakat dan memberikan pengalaman kuliner yang memuaskan bagi para pelanggan. </p>
    </div>
</section>

<section class="location-section"> 
    <h2>JAM OPERASIONAL</h2>
    <p>17:00-20:00</p>
    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.778024844005!2d124.91430689999997!3d1.3084251000000118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x328715e0ce587559%3A0xd3f1de12ea64d557!2sAraya!5e0!3m2!1sid!2sid!4v1731419143060!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
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
           ["name" => "Mie Goreng Ayam", "price" => "Rp. 18.000", "image" => "images/menuaraya/miegorengayam.jpg"],
           ["name" => "Mie Goreng Cakalang", "price" => "Rp. 18.000", "image" => "images/menuaraya/miegorengcakalang.jpg"],
           ["name" => "Nasi Goreng Cakalang", "price" => "Rp. 18.000", "image" => "images/menuaraya/nasigorengcakalang.jpg"],
           ["name" => "Nasi Goreng Ayam", "price" => "Rp. 18.000", "image" => "images/menuaraya/nasigorengayam.jpg"],
           ["name" => "Mie Kuah Cakalang", "price" => "Rp. 15.000", "image" => "images/menuaraya/miekuahcakalang.jpg"],
           ["name" => "Nutrisari", "price" => "Rp. 5.000", "image" => "images/menuaraya/nutrisari.jpg"],
           ["name" => "Kopi", "price" => "Rp. 5.000", "image" => "images/menuaraya/kopi.jpg"],
           ["name" => "Teh Manis", "price" => "Rp. 5.000", "image" => "images/menuaraya/teh.jpg"],
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
<div class="whatsapp-button">
        <a href="https://wa.me/6282196906154" target="_blank">
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