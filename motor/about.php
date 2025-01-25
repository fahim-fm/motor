<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery - Throttle</title>
  <link rel="stylesheet" href="about.css">
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
  <section class="about-section">
    <div class="about-content">
      <h1>About Our Shop</h1>
      <p>
        Welcome to <strong>Throttle</strong>, your one-stop destination for everything motorcycles. 
        Whether you’re a passionate rider or a beginner, we provide top-notch products and services 
        to help you get the most out of your vehicle. Established in 2010, our mission has always 
        been to deliver quality and reliability to our customers.
      </p>
      <h2>What We Offer:</h2>
      <ul>
        <li>High-performance motorcycles for all types of riders</li>
        <li>Custom parts and accessories</li>
        <li>Expert maintenance and repair services</li>
        <li>Motorcycle riding gear and apparel</li>
        <li>Exclusive events and community rides</li>
      </ul>
    </div>
    <div class="about-image">
      <img src="image/pngegg.png" alt="Motorcycle Shop">
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Throttle. All Rights Reserved.</p>
  </footer>
</body>
</html>
