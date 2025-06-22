<?php
include_once('function.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_name = validate_input($_POST['admin_name']);
    $email = validate_input($_POST['email']);
    $password = enc_pw(validate_input($_POST['password']));
    $confirm_password = enc_pw(validate_input($_POST['confirm_password']));
    if($password != $confirm_password){
        $message = 'Password does not match';
    }
    else{
        require_once('../connect.php');
        $sql = "INSERT INTO `admin` (`AdminName`, `Email`, `Password`) VALUES('$admin_name', '$email', '$password')";
        mysqli_query($conn, $sql);
        header("Location: login_admin.php");

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
    
    <?php if (isset($message)): ?>
        <p style="color:red;"><?php echo $message; ?></p>
    <?php endif; ?>
    <form method="POST">
        <table class="form">
            <caption>Sign Up</caption>
        <tr>
            <td><label for="admin_name">Admin Name:</label></td>
            <td><input type="text" id="admin_name" name="admin_name" required></td>
        </tr>

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