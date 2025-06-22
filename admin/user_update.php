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

  <link rel="icon" type="/image/x-icon" href="../image/Logo.png">
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
<?php
require_once('../connect.php');

$user_name = '';
$email = '';
$password = '';
$phone_number = '';
$img = '';



if (isset($_GET['User_ID'])){
    $id = $_GET['User_ID'];
    $query = "SELECT * FROM user WHERE User_ID = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $user_name = $row['Username'];
        $email = $row['Email'];
        $password = $row['Password'];
        $phone_number = $row['PhoneNumber'];
        $img = $row['Img'];
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];
    $img = $img;

    if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        $img = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], '../image/' . $img);
    }

    $sql = "UPDATE user SET Username='$user_name', Email='$email', Password='$password', PhoneNumber='$phone_number', Img='$img' WHERE User_ID=$id";
    if (mysqli_query($conn, $sql)) {
        header('Location: user.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<html>
<head>
    <title>Lady Store - User Update</title>
</head>
<body>
    <div class="content">
       <div class="title">
    <h1 style="text-align: center">User Update</h1>
   </div>
     <form method="post" enctype="multipart/form-data" class="form">
      <h2>Name</h2>
        <input type="text" name="user_name" value="<?php echo htmlspecialchars($user_name);?>"><br>
      <h2>Email</h2>
      <input type="text" name="email" value="<?php echo htmlspecialchars($email);?>"><br>
      <h2>Password</h2>
      <input type="text" name="password" value="<?php echo htmlspecialchars($password);?>"><br>
      <h2>phone number</h2>
      <input type="text" name="phone_number" value="<?php echo htmlspecialchars($phone_number);?>"><br>
      <h2>Image</h2>
      <input type="file" name="img"><br>
         <?php if ($img): ?>
            <img src="../image/<?php echo htmlspecialchars($img);?>" alt="Product Image"><br>
        <?php endif; ?>
        <input type="submit" value="Update" class="user_update" style="color: white;">
     </form>
</div>
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