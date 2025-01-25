<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Motorcycle Showcase</title>
  <link rel="stylesheet" href="styles.css">
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

  <section class="hero">
    <div class="content">
      <h2>Unleash Beast</h2>
      <p>Get the Most of Your Vehicle</p>
      <a href="read-more.php" class="btn">Read More</a>
    </div>
    <div class="image-container">
      <label for="popup-toggle">
        <img src="image/pngegg.png" alt="Motorcycle" id="motorcycle-image">
      </label>
    </div>
  </section>
</body>
</html>
