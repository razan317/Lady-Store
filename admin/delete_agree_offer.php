<?php
require_once('../connect.php');
$id = isset($_GET['Offer_ID']) ? intval($_GET['Offer_ID']) : 0;
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
<section>
      <h3>Are you sure you want to delete?</h3>
        <div class="delete">
            <a href="offer_delete.php?Offer_ID=<?php echo $id; ?>" class="link" style="background-color: rgb(219, 56, 50); padding: 15px;">Yes</a>
            <a href="offer_admin.php" class="link" style="background-color: green; padding: 15px;">No</a>
        </div>
</section>
</body>

</html>