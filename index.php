<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home </title>
        <link rel="stylesheet" href="styles.css">
        
        <!-- fonts -->
        <!-- poppins -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Vesper Libre -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Vesper+Libre:wght@400;500;700;900&display=swap" rel="stylesheet">
    
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
        <nav>
            <ul class="nav-menu">
                <li><a href="index.php" class="nav-btn">Home</a></li>
                <li><a href="destinasi.php" class="nav-btn">Destinasi</a></li>
            </ul>
        </nav>
        <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
         </div>
    </header>
    
    
    <section class="hero">
        <div class="hero-content">
            <h1>Selamat datang di Eksplorasi Kuliner</h1>
            <p>Temukan cita rasa terbaik di berbagai sudut kota</p>
            <a href="destinasi.php" class="cta">Temukan Sekarang</a>
        </div>
    </section>
    
    <section class="about-section">
        <div class="about">
            <div class="image-about">
                <img src="images/about.jpg" alt="Rumah Makan Tjeria">
                <img src="images/about1.jpg" alt="Warung Makan Semoga">
            </div>
            <div class="text-about">
                <h2><span>Tentang</span> Eksplorasi Kuliner</h2>
                <p>
                Eksplorasi Kuliner adalah website yang bergerak dibidang kuliner. 
                Alasan dibuatnya website ini adalah untuk memberikan informasi seputar kuliner yang ada di kota Tondano.
                </p>
            </div>
        </div>
    </section>
    
    <section class="menu-preview">
        <section class="section">
            <h2>Menu Favorit</h2>
            <div class="menu-items">
                <div class="menu-item" href="rumahmakan2.php">
                    <img alt="Mie Kuah Ayam" src="images/menuaraya/miekuahayam.jpg">
                    <h3>Mie Kuah Ayam</h3>
                    <p>Warung Makan Araya</p>
                </div>
        <div class="menu-item">
            <img alt="Nasi Campur Kangkung Cah" src="images/menusemoga/nasicampurkangkungcah.jpg">
            <h3>Nasi Campur Kangkung Cah</h3>
     <p>Warung Makan Semoga</p>
    </div>
    <div class="menu-item">
        <img alt="Es Teler" src="images/menutjeria/esteler.jpg">
        <h3>Es Teler</h3>
        <p>Rumah Makan Tjeria</p>
    </div>
    <div class="menu-item">
        <img alt="Ikan Goreng Sambal" src="images/menuperum/ikangorengsambal.jpg">
        <h3>Ikan Goreng Sambal</h3>
        <p>Warung Perum</p>
    </div>
</div>
</section>
<footer><p>&copy; 2024 Eksplorasi Kuliner | All rights reserved.</p></footer>
<script>
    feather.replace()
</script>

<script src="js/script.js"></script>
</body>
</html>
