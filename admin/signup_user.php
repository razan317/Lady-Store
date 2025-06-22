<?php
include_once('function.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = validate_input($_POST['username']);
    $phone_number = validate_input($_POST['phone_number']);
    $email = validate_input($_POST['email']);
    $password = enc_pw(validate_input($_POST['password']));

    

        $sql = "SELECT * FROM `user` WHERE `Username` = '$username' AND `Email` = '$email' AND `Password` = '$password' AND `PhoneNumber` = '$phone_number'";
        require_once('connect.php');
        $res_user = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res_user) > 0) {
        $row = mysqli_fetch_assoc($res_user);
        $_SESSION['User_ID'] = $row['User_ID'];
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['Password'] = enc_pw($row['Password']);
        header("Location: login_user.php");
        }
         else 
        {
            echo '<div class="error"> Email or Password is incorrect.</div>';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
</head>
<body>
     <?php if ($message): ?>
        <p style="color:red;"><?php echo $message; ?></p>
    <?php endif; ?>


    <form method="POST">
        <table class="form">
        <caption>Sign Up</caption>
        <tr>
            <td><label for="username">Username:</label></td>
            <td><input type="text" id="username" name="username" required></td>
        </tr>
        <tr>
            <td><label for="phone_number">Phone Number:</label></td>
            <td><input type="text" id="phone_number" name="phone_number" required></td>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email" required></td>
        </tr>
        <tr>
            <td><label for="password">Password:</label></td>
            <td><input type="password" id="password" name="password" required></td>
        </tr>
        <tr>
            <td><label for="confirm_password">Confirm Password:</label></td>
            <td><input type="password" id="confirm_password" name="confirm_password" required></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Sign Up</button></td>
        </tr>
    </table>
    </form>
     </body>
     </html>