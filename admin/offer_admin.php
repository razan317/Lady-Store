<?php
require_once('../connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lady Store</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Akatab:wght@400;500;600;700;800;900&family=Allura&display=swap"
    rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="../image/Logo.png">
  <link rel="stylesheet" href="admin.css">
</head>

<body>
  <header>
    <div class="Current"> >| Current offers</div>
    <div class="discount">Get 25% discount now !</div>
  </header>
 <nav>
        <div class="left-section">
            <img src="../image/Logo.png" alt="Logo" class="logo">
            <span class="logo-text">Lady Store</span>
            <a href="../index.php">Home</a>
            <a href="../about.php">About</a>
            <a href="../contact_us.php">Contact Us</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search for a product">
            <div class="search-icon">
                <img src="../image/Search.svg" alt="Search">
            </div>
        </div>
        <div class="icons">
            <a href="LogIn.php"><img src="../image/PersonCircle.svg" alt="Sign in" /></a>
            <a href="#"><img src="../image/Heart.svg" alt="Favorites"></a>
            <a href="#"><img src="../image/Cart3.svg" alt="Cart"></a>
            <a href="#"><img src="../image/Menu.svg" alt="Menu"></a>
        </div>
    </nav>

  <section class="offers">
     <a href="offer_add.php"><button class="add_offer">Add Offer</button></a>
    <div class="offer-boxes">
      <table class="offer_table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Offer Name</th>
            <th>Image</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Discount Type</th>
            <th>Edit Choices</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM offers";
          $result = mysqli_query($conn, $query);
          $counter = 1;
          while($row = mysqli_fetch_assoc($result)) {
           echo "<tr>";
           echo "<td>" . $counter++ . "</td>";
           echo "<td>" . htmlspecialchars($row['OfferName']) . "</td>";
           echo "<td><img src='../image/" . htmlspecialchars($row['Img']) . "' style='width: 100px; align-content: center; margin-left: 30%; border-radius: none;'></td>";
           echo "<td>" . htmlspecialchars($row['StartDate']) . "</td>";
           echo "<td>" . htmlspecialchars($row['EndDate']) . "</td>";
           echo "<td>" . htmlspecialchars($row['Discount_Type']) . "</td>";
           echo "<td>
                   <a href='offer_update.php?Offer_ID=" . $row['Offer_ID'] . "' class='link' style='background-color: green; padding: 15px;'>Edit</a>
                   <a href='delete_agree_offer.php?Offer_ID=" . $row['Offer_ID'] . "' class='link' style='background-color: rgb(219, 56, 50); padding: 15px;'>Delete</a>
                     </td>";
              echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
    </div>
  </section>
  <footer>
    <div class="Contact">
      <h3>Contact</h3>
      <p>+972 597 985 567</p>
      <p>+972 539 529 941</p>
      <p>Al-Bireh, Ramallah</p>
    </div>
    <div class="social-icon">
      <a href="https://www.facebook.com/DALA3mall1/?locale=ar_AR" target="_blank"><img src="../social-icon/Facebook.png"
          alt="Facebook"></a>
      <a href="#" target="_blank"><img src="../social-icon/Instagram.png" alt="Instagram"></a>
      <a href="#" target="_blank"><img src="../social-icon/Tiktok.png" alt="Tiktok"></a>
    </div>
    <div class="Shop">
      <h3>Shop</h3>
      <p><a href="../index.php">Home</a></p>
        <p><a href="../about.php">About</a></p>
        <p><a href="../contact_us.php">Contact Us</a></p>
    </div>
  </footer>
  <div style="text-align: center; background: #550934; color: white; padding: 10px; font-family: Akatab, sans-serif; font-weight: 300;
    font-style: normal;">
    ©2025 Lady Store. All rights reserved
  </div>
</body>

</html>
