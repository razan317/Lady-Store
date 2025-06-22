<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lady Store - Cart</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Allura&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Akatab:wght@400;500;600;700;800;900&family=Allura&display=swap"
      rel="stylesheet"
    />

    <link rel="icon" type="image/x-icon" href="/image/Logo.png" />
    <link rel="stylesheet" href="cart.css" />
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
            <a href="About.php">About</a>
            <a href="Contact_Us.php">Contact Us</a>
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
    <div class="content">
      <div class="title">
        <h1 style="text-align: center">My Shopping Cart</h1>
        <table class="cart-table">
          <tr>
            <th>Creation Date</th>
            <th>Total Price</th>
            <th>Address</th>
            <th>Status</th>
          </tr>
          <tr>
            <td>552 </td>
            <td> 435</td>
            <td>6767 </td>
            <td>close</td>
          </tr>
           <tr>
            <td>552 </td>
            <td> 435</td>
            <td>6767 </td>
            <td>open</td>
          </tr>
        </table>
      </div>
    </div>

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
