<?php
require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lady Store - About</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Allura&display=swap"
      rel="stylesheet"/>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Akatab:wght@400;500;600;700;800;900&family=Allura&display=swap" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="/image/Logo.png" />
    <link rel="stylesheet" href="about.css">
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
      <h1>Lady Store - About</h1>
    </div>
    <div class="content">
      <h2>About</h2>
      <p>
        Welcome to Lady Store, your go-to destination for stylish, elegant, and
        high-quality fashion
      </p>
      <p>
        curated especially for women who love to express themselves with
        confidence.
      </p>

      <h2>How Are We</h2>
      <p>
        At Lady Store, we believe that fashion is more than just clothing — it's
        a form of self-expression.
      </p>
      <p>
        We're a dedicated team of fashion enthusiasts committed to bringing you
        the latest trends,
      </p>
      <p>timeless classics, and everyday essentials, all in one place.</p>

      <h2>Our Mission</h2>
      <p>
        Our mission is to empower women through fashion. Whether you're dressing
        for a special
      </p>
      <p>event, refreshing your wardrobe, or just treating yourself,</p>
      <p>
        we want every piece you wear to make you feel beautiful, strong, and
        unapologetically you.
      </p>

      <h2>What We Offer</h2>
      <ul>
        <p><li>Chic and affordable women’s clothing.</li></p>
        <p><li>Accessories that add the perfect finishing touch.</li></p>
        <p>
          <li>Carefully selected collections for all seasons and occasions.</li>
        </p>
        <p><li>A seamless and enjoyable shopping experience.</li></p>
      </ul>

      <h2>Why Choose Us?</h2>
      <ul>
        <p>
          <li>
            Quality First: We choose only the best materials and trusted
            suppliers.
          </li>
        </p>
        <p>
          <li>Customer-Centrist: Your satisfaction is our top priority.</li>
        </p>
        <p>
          <li>
            Trendy Yet Timeless: We balance current trends with pieces that
            last.
          </li>
        </p>
      </ul>
      <h2>Join Our Journey</h2>
      <p>
        Lady Store is more than a fashion brand — it’s a growing community of
        bold,
      </p>
      <p>beautiful women who support and inspire each other.</p>
      <p>Thank you for being a part of it.</p>
      <p>Stay confident. Stay classy. Stay you.</p>
      <p>– The Lady Store Team.</p>
    </div>
    <div class="go-back-btn">
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
        <a
          href="https://www.facebook.com/DALA3mall1/?locale=ar_AR"
          target="_blank"
          ><img src="/social-icon/Facebook.png" alt="Facebook"
        /></a>
        <a href="#" target="_blank"
          ><img src="/social-icon/Instagram.png" alt="Instagram"
        /></a>
        <a href="#" target="_blank"
          ><img src="/social-icon/Tiktok.png" alt="Tiktok"
        /></a>
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
