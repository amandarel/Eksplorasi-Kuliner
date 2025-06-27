<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Makan Tjeria</title>
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

<section class="hero6">
    <div class="hero-content3">
        <h1>Rumah Makan Tjeria</h1>
        <p>Rumah Makan Tjeria menyediakan menu-menu yang beragam dengan rasa yang enak, Rumah makan ini juga menyediakan beberapa menu yang hanya tersedia di pagi hari sebagai sarapan dengan harga yang terjangkau</p>
    </div>
</section>

<section class="location-section"> 
    <h2>JAM OPERASIONAL</h2>
    <p>08:00-19:00</p>
    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.777579257993!2d124.91153297472447!3d1.3087052986788816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32871500398c0b6b%3A0x479e2aba8192bef5!2sRM%20TJERIA!5e0!3m2!1sen!2sid!4v1731984737443!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
           ["name" => "Makan Puas", "price" => "Rp. 20.000", "image" => "images/menutjeria/makanpuas.jpg"],
           ["name" => "Nasi Hebring", "price" => "Rp. 5.000", "image" => "images/menutjeria/nasihebring.jpg"],
           ["name" => "Nasi Kuning", "price" => "Rp. 10.000", "image" => "images/menutjeria/nasikuning.jpg"],
           ["name" => "Midal", "price" => "Rp. 10.000 ", "image" => "images/menutjeria/tinutuan.jpg"],
           ["name" => "Mie Kuah Cakalang", "price" => "Rp. 12.000", "image" => "images/menutjeria/miekuahcakalang.jpg"],
           ["name" => "Es Teler S", "price" => "Rp. 10.000", "image" => "images/menutjeria/esteler.jpg"],
           ["name" => "Es Teler M", "price" => "Rp. 15.000", "image" => "images/menutjeria/esteler.jpg"],
           ["name" => "Es Teler L", "price" => "Rp. 20.000", "image" => "images/menutjeria/esteler.jpg"],
           ["name" => "Es Cendol S", "price" => "Rp. 10.000", "image" => "images/menutjeria/escendol.jpg"],
           ["name" => "Es Cendol M", "price" => "Rp. 15.000", "image" => "images/menutjeria/escendol.jpg"],
           ["name" => "Es Cendol L", "price" => "Rp. 20.000", "image" => "images/menutjeria/escendol.jpg"],
           ["name" => "Tipsy Cake", "price" => "Rp. 30.000", "image" => "images/menutjeria/tipsycake.jpg"],
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
        <a href="https://wa.me/6281251619747" target="_blank">
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