<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Makan Semoga</title>
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

<section class="hero3">
    <div class="hero-content3">
        <h1>Warung Makan Semoga</h1>
        <p>Warung Makan Semoga menyediakan menu-menu dengan harga yang terjangkau dengan rasa yang enak, lokasinya yang berada di sekitar area perkantoran menjadikan warung makan semoga sebagai pilihan yang tepat untuk menu makan siang.</p>
    </div>
</section>

<section class="location-section"> 
    <h2>JAM OPERASIONAL</h2>
    <p>10:00-16:00</p>
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.769201306608!2d124.91373440000002!3d1.3139625000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x328713881a9e885f%3A0xf0c9d5baabb5a668!2s8W77%2BHFQ%2C%20Kembuan%2C%20Kec.%20Tondano%20Utara%2C%20Kabupaten%20Minahasa%2C%20Sulawesi%20Utara!5e0!3m2!1sid!2sid!4v1731417046574!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
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
           ["name" => "Nasi Campur Kuah Gedi", "price" => "Rp. 16.000", "image" => "images/menusemoga/nasicampurkuahgedi.jpg"],
           ["name" => "Nasi Campur Kangkung Cah", "price" => "Rp. 16.000", "image" => "images/menusemoga/nasicampurkangkungcah.jpg"],
           ["name" => "Miedal", "price" => "Rp. 10.000", "image" => "images/menusemoga/miedal.jpg"],
           ["name" => "Mie Kuah Cakalang", "price" => "Rp. 10.000", "image" => "images/menusemoga/miekuahcakalang.jpeg"],
           ["name" => "Mie Goreng Cakalang", "price" => "Rp. 15.000", "image" => "images/menusemoga/miegorengcakalang.jpeg"],
           ["name" => "Gohu", "price" => "Rp. 5.000", "image" => "images/menusemoga/gohu.jpg"],
           ["name" => "Pisang Goreng", "price" => "Rp. 10.000", "image" => "images/menusemoga/pisangoreng.webp"],
           ["name" => "Tahu isi", "price" => "Rp. 5.000/3", "image" => "images/menusemoga/tahuisi.jpg"],
           ["name" => "Perkedel Milu", "price" => "Rp. 10.000/paket", "image" => "images/menusemoga/perkedelmilu.webp"],
           ["name" => "Perkedel Nike", "price" => "Rp. 5.000/3", "image" => "images/menusemoga/perkedelnike.jpg"],
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
        <a href="https://wa.me/6285342857900" target="_blank">
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