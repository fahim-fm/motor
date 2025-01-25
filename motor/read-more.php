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
  <section class="read-more-section">
    <h1>Unleash the Beast</h1>
    <img src="image/pngegg.png" alt="Motorcycle Feature">
    <p>
      At Throttle, we believe in delivering high-performance motorcycles that are 
      built for both thrill and comfort. Our flagship model represents the pinnacle 
      of design and engineering. It comes with an aerodynamic body, powerful engine, 
      and advanced suspension for the ultimate riding experience.
    </p>
    <p>
      Features:
      <ul>
        <li>Engine: 999cc, 4-cylinder, liquid-cooled</li>
        <li>Top Speed: 180 mph</li>
        <li>Transmission: 6-speed manual</li>
        <li>Technology: Anti-lock Braking System (ABS), Traction Control</li>
        <li>Design: Sleek, lightweight, and aerodynamic</li>
      </ul>
    </p>
    <p>
      Whether you’re riding on the open highway or taking sharp corners, this bike 
      delivers unmatched performance. Visit our shop or explore our gallery for 
      more options tailored to your riding needs.
    </p>
  </section>

  <footer>
    <p>&copy; 2025 Throttle. All Rights Reserved.</p>
  </footer>
</body>
</html>
