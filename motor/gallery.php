<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery - Throttle</title>
  <link rel="stylesheet" href="gallery.css">
</head>
<body>
<header class="navbar">
    <div class="logo">Throttle</div>
    <nav class="menu">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="gallery.php">Gallery</a>
      <?php
      session_start();
      if (isset($_SESSION['user_id'])) {
          echo '<a href="#">Welcome, ' . $_SESSION['user_name'] . '</a>';
          echo '<a href="logout.php">Logout</a>';
      } else {
          echo '<a href="login.php">Login</a>';
      }
      ?>
    </nav>
  </header>
  <section class="gallery-section">
    <h1>Motorcycle Gallery</h1>
    <p>Explore our exclusive collection of high-performance motorcycles.</p>
    <div class="gallery-grid">
      <div class="gallery-item">
        <img src="image/pngegg (1).png" alt="Sport Bike">
        <h3>Sport Bike</h3>
        <p>High-speed performance and sleek design.</p>
      </div>
      <div class="gallery-item">
        <img src="image/pngegg (2).png" alt="Cruiser">
        <h3>Cruiser</h3>
        <p>Perfect for long-distance and comfort rides.</p>
      </div>
      <div class="gallery-item">
        <img src="image/pngegg.png" alt="Adventure Bike">
        <h3>Adventure Bike</h3>
        <p>Ready for off-road and thrilling adventures.</p>
      </div>
      <div class="gallery-item">
        <img src="image/pngegg3.png" alt="Electric Bike">
        <h3>Electric Bike</h3>
        <p>Eco-friendly with cutting-edge technology.</p>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Throttle. All Rights Reserved.</p>
  </footer>
</body>
</html>
