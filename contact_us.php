<?php
require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lady Store - Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Akatab:wght@400;500;600;700;800;900&family=Allura&display=swap"rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="../image/Logo.png" />
    <link rel="stylesheet" href="contact.css" />
  </head>
  <body>
    <header>
      <div class="Current">>| Current offers</div>
      <div class="discount">Get 25% discount now !</div>
    </header>
    <nav>
        <div class="left-section">
            <img src="image/Logo.png" alt="Logo" class="logo">
            <span class="logo-text">Lady Store</span>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact_us.php">Contact Us</a>
        </div>
         <div class="search-bar">
            <input type="text" placeholder="Search for a product">
            <div class="search-icon">
                <img src="image/Search.svg" alt="Search">
            </div>
        </div>
        <div class="icons">
            <a href="LogIn.php"><img src="image/PersonCircle.svg" alt="Sign in" /></a>
            <a href="#"><img src="image/Heart.svg" alt="Favorites"></a>
            <a href="#"><img src="image/Cart3.svg" alt="Cart"></a>
            <a href="#"><img src="image/Menu.svg" alt="Menu"></a>
        </div>
    </nav>
    <div class="title">
      <h1>Lady Store - Contact Us</h1>
    </div>
    <div class="content">
      <h2><img src="icon-con/GeoAlt.png" />Address</h2>
      <p>Al-Bireh, Ramallah</p>
      <p>Palestine</p>

      <h2><img src="icon-con/Telephone.png" />Phone</h2>
      <p>+972 597 985 567</p>
      <p>+972 593 529 941</p>

      <h2><img src="icon-con/Vector.png" />Email</h2>
      <p>LadyStore2000@gmail.com</p>

      <h2><img src="icon-con/ClockHistory.png" />Working Hours</h2>
      <p>Saturday - Thursday: 9AM - 7PM</p>

      <h2 style="color: black">
        <img src="icon-con/Message square.png" />Send Us a Message
      </h2>
      <form method="POST" action="#" class="form">
        <h2>Your Name</h2>
        <input type="text" name="name" required />
        <h2>Email</h2>
        <input type="email" name="email" required />
        <h2>Subject</h2>
        <input type="text" name="subject" required />
        <h2>Message</h2>
        <textarea name="message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
     <div class="go-back-btn" >
       <a href="index.php">Go Back</a>
    </div>
    <footer>
      <div class="Contact">
        <h3>Contact</h3>
        <p>+972 597 985 567</p>
        <p>+972 539 529 941</p>
        <p>Al-Bireh, Ramallah</p>
      </div>
      <div class="social-icon">
        <a href="https://www.facebook.com/DALA3mall1/?locale=ar_AR" target="_blank"><img src="../social-icon/Facebook.png" alt="Facebook" /></a>
        <a href="#" target="_blank"><img src="../social-icon/Instagram.png" alt="Instagram" /></a>
        <a href="#" target="_blank"><img src=".. /social-icon/Tiktok.png" alt="Tiktok" /></a>
      </div>
      <div class="Shop">
        <h3>Shop</h3>
        <p><a href="index.php">Home</a></p>
        <p><a href="about.php">About</a></p>
        <p><a href="contact_us.php">Contact Us</a></p>
      </div>
    </footer>
    <div
      style="
        text-align: center;
        background: #550934;
        color: white;
        padding: 10px;
        font-family: Akatab, sans-serif;
        font-weight: 300;
        font-style: normal;
      "
    >
      ©2025 Lady Store. All rights reserved
    </div>
  </body>
</html>
