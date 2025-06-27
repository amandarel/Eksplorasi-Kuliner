<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Makan Astomi</title>
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

<section class="hero14">
    <div class="hero-content3">
        <h1>Rumah Makan Astomi</h1>
        <p>Rumah Makan Astomi adalah usaha kuliner yang berada di sekitar danau Tondano, menyediakan hidangan laut yang segar dengan cita rasa autentik.</p>
    </div>
</section>

<section class="location-section"> 
    <h2>JAM OPERASIONAL</h2>
    <p>08:00-21:00</p>
    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8629954995863!2d124.89807137472445!3d1.2538490987342152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3287157a2536d963%3A0xeb674fe5b916d484!2sRM.%20Astomi!5e0!3m2!1sid!2sid!4v1732496574504!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
           ["name" => "Ikan Mujair Bakar", "price" => "Rp. 30.000", "image" => "images/menuastomi/mujairbakar.jpg"],
           ["name" => "Lobster goreng", "price" => "Rp. 65.000", "image" => "images/menuastomi/lobstergoreng.jpg"],
           ["name" => "Ikan Mujair Goreng", "price" => "Rp. 30.000", "image" => "images/menuastomi/mujairgoreng.jpg"],
           ["name" => "Pampis Cakalang", "price" => "Rp. 25.000", "image" => "images/menuastomi/pampiscakalang.jpg"],
           ["name" => "Ikan Payangka Goreng", "price" => "Rp. 35.000", "image" => "images/menuastomi/payangkagoreng.jpg"],
           ["name" => "Ikan Mas Bakar Rica", "price" => "Rp. 65.000/sedang", "image" => "images/menuastomi/ikanmasbakarica.jpg"],
           ["name" => "Ikan Mas Bakar Rica", "price" => "Rp. 75.000/besar", "image" => "images/menuastomi/ikanmasbakarica.jpg"],
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