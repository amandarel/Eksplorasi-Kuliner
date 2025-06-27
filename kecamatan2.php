<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tondano Timur </title>
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
        <form method="GET" action="">
            <div class="search-bar">
                <input type="text" name="search" placeholder="Cari tempat makan">
                <button type="submit">Cari</button>
            </div>
        </form>
        <nav>
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
    <section class="hero7">
        <div class="hero-content1">
            <h1>Tondano Timur</h1>
         </div>
</section>
<main>
    <section class="destinasi">
    <?php
            include 'data.php';
            
            $search = isset($_GET['search']) ? strtolower($_GET['search']) : '';
            
            $filteredRestaurants1 = array_filter($restaurants1, function($restaurant1) use ($search) {
                return $search === '' || strpos(strtolower($restaurant1['name']), $search) !== false;
            });
            
            if (count($filteredRestaurants1) > 0) {
                foreach ($filteredRestaurants1 as $index => $restaurant1) {
                    echo "<div class='warung-makan'>";
                        $detailPage = 'rumahmakan' . ($index + 1) . '.php';
                        echo "<a href='" . $detailPage . "'>"; 
                        echo "<img src='images/" . htmlspecialchars($restaurant1['image']) . "' alt='" . htmlspecialchars($restaurant1['name']) . "'>";
                        echo "</a>";
                        echo "<h2>" . htmlspecialchars($restaurant1['name']) . "</h2>";
                        echo "<p>" . htmlspecialchars($restaurant1['description']) . "</p>";
                        echo "</div>";
                    }
                    
                }
             else {
                echo "<p>Tidak ada tempat makan yang ditemukan.</p>";
            }
            ?>
        </section>
    </main>
<footer><p>&copy; 2024 Eksplorasi Kuliner | All rights reserved.</p></footer>
<script>
    feather.replace()
</script>
<script src="js/script.js"></script>
</body>
</html>
