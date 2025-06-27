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

<section class="hero13">
    <div class="hero-content3">
        <h1>Rumah Makan Muslim Nabilah</h1>
        <p>Rumah Makan Nabilah menyediakan menu-menu dengan harga yang terjangkau dengan rasa yang sudah pasti enak.</p>
    </div>
</section>

<section class="location-section"> 
    <h2>JAM OPERASIONAL</h2>
    <p>08:00-20:30</p>
    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.843350799282!2d124.875328!3d1.2666757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x328715834709c275%3A0x6007067788806c7b!2sRumah%20Makan%20Muslim%20%22NABILAH%2087%22!5e0!3m2!1sid!2sid!4v1732460468890!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section class="services">
<h2>Layanan yang tersedia</h2>
            <div class="service-container">
                <div class="service">
                    <img src="images/pesanonline.jpg" alt="Pesan Online" class="service-icon">
                        <h3>Pesan Online</h3>
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
           ["name" => "Ayam Geprek Crispy", "price" => "Rp. 11.000", "image" => "images/menunabilah/ayamgeprekcrispy.jpg"],
           ["name" => "Ayam Geprek Crispy Keju", "price" => "Rp. 14.000", "image" => "images/menunabilah/ayamgeprekcrispykeju.jpg"],
           ["name" => "Ayam Goreng Crispy Saos Lava", "price" => "Rp. 13.000", "image" => "images/menunabilah/ayamsaoslava.jpg"],
           ["name" => "Ayam Goreng Lalapan", "price" => "Rp. 16.000", "image" => "images/menunabilah/ayamgorenglalapan.jpg"],
           ["name" => "Nasi Ayam Geprek Crispy", "price" => "Rp. 16.000", "image" => "images/menunabilah/nasiayamgeprek.jpg"],
           ["name" => "Nasi Ayam Geprek Crispy Keju", "price" => "Rp. 19.000", "image" => "images/menunabilah/nasiayamgeprekeju.jpeg"],
           ["name" => "Nasi Ayam Goreng Crispy Lava", "price" => "Rp. 18.000", "image" => "images/menunabilah/nasisaoslava.jpg"],
           ["name" => "Nasi Ayam Goreng Lalapan", "price" => "Rp. 21.000", "image" => "images/menunabilah/nasiayamlalapan.jpg"],
           ["name" => "Rice Bowl Chicken Teriyaki", "price" => "Rp. 20.000", "image" => "images/menunabilah/ricebowlteriyaki.jpe"],
           ["name" => "Nasi Ayam Suwir", "price" => "Rp. 16.000", "image" => "images/menunabilah/nasiayamsuwir.jpg"],
           ["name" => "Nasi Ayam Sayur", "price" => "Rp. 18.000", "image" => "images/menunabilah/nasiayamsayur.jpg"],
           ["name" => "Nasi Tahu Kremes", "price" => "Rp. 11.000", "image" => "images/menunabilah/nasitahukremes.jpeg"],
           ["name" => "Mie Ayam", "price" => "Rp. 14.000", "image" => "images/menunabilah/mieayam.webp"],
           ["name" => "Mie Bakso", "price" => "Rp. 14.000", "image" => "images/menunabilah/miebakso.webp"],
           ["name" => "Mie Goreng Ayam Geprek", "price" => "Rp. 15.000", "image" => "images/menunabilah/miegorengayamgeprek.jpg"],
           ["name" => "Nasi Goreng", "price" => "Rp. 10.000", "image" => "images/menunabilah/nasigoreng.jpe"],
           ["name" => "Nasi Goreng Ayam Geprek", "price" => "Rp. 20.000", "image" => "images/menunabilah/nasigorengeprek.jpeg"],
           ["name" => "Nasi Goreng", "price" => "Rp. 10.000", "image" => "images/menunabilah/nasigoreng.jpe"],
           ["name" => "Banana Crispy Cokelat Milo", "price" => "Rp. 15.000", "image" => "images/menunabilah/pisangmilo.webp"],
           ["name" => "Pentol Pedas Level Istighfar", "price" => "Rp. 10.000", "image" => "images/menunabilah/pentolistighfar.jpg"],
           ["name" => "Tahu Bakso", "price" => "Rp. 2.000", "image" => "images/menunabilah/baksotahu.jpg"],
           ["name" => "Risoles", "price" => "Rp. 2.000", "image" => "images/menunabilah/risoles.jpeg"],
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