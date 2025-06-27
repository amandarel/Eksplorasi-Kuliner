<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Katinggolan</title>
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

<section class="hero12">
    <div class="hero-content3">
        <h1>Kuliner Katinggolan</h1>
        <p>Kuliner Katinggolan adalah usaha kuliner yang bisa menjadi pilihan untuk lauk makan pagi sampai malam. </p>
    </div>
</section>

<section class="location-section"> 
    <h2>JAM OPERASIONAL</h2>
    <p>08:00-21:00</p>
    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d249.29916169719385!2d124.91428772802195!3d1.3030291450524027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMcKwMTgnMTEuMyJOIDEyNMKwNTQnNTIuMiJF!5e0!3m2!1sen!2sid!4v1732113873386!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section class="services">
        <h2>Layanan yang tersedia</h2>
        <div class="service-container">
            <div class="service">
                <img src="images/bungkus.webp" alt="bungkus" class="service-icon">
                    <h3>Bungkus</h3>
            </div>
        </div>
</section>

<section class="menu-section">
    <h4>Menu</h4>
    <div class="menu">
        <?php 
        $menu = [
           ["name" => "Tahu Tempe", "price" => "Rp. 15.000", "image" => "images/menukatinggolan/tahutempe.jpg"],
           ["name" => "Tinoransak", "price" => "Rp. 30.000", "image" => "images/menukatinggolan/tinoransak.jpg"],
           ["name" => "Mujair Woku", "price" => "Rp. 20.000", "image" => "images/menukatinggolan/mujairwoku.jpg"],
           ["name" => "Asam Manis Babi", "price" => "Rp. 20.000", "image" => "images/menukatinggolan/asammanisbabi.jpg"],
           ["name" => "Puyunghai", "price" => "Rp. 20.000", "image" => "images/menukatinggolan/fuyunghae.jpg"],
           ["name" => "Telor Santang", "price" => "Rp. 20.000", "image" => "images/menukatinggolan/telursantang.jpg"],
           ["name" => "Sate Babi", "price" => "Rp. 4.500", "image" => "images/menukatinggolan/satebabi.jpg"],
           ["name" => "Mujair Bakar", "price" => "Rp. 30.000", "image" => "images/menukatinggolan/mujairbakar.jpg"],
           ["name" => "Cakalang Bakar", "price" => "Rp. 30.000", "image" => "images/menukatinggolan/cakalangbakar.jpg"],
           ["name" => "Posana", "price" => "Rp. 15.000", "image" => "images/menukatinggolan/posana.jpg"],
           ["name" => "Pudding Mangga & Cokelat", "price" => "Rp. 10.000", "image" => "images/menukatinggolan/puddingmanggacoklat.jpg"],
           ["name" => "Asinan", "price" => "Rp. 5.000", "image" => "images/menukatinggolan/gohu.jpg"],
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