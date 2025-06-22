<?php
include_once('function.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_name = validate_input($_POST['admin_name']);
    // $email = validate_input($_POST['email']);
    $password = enc_pw(validate_input($_POST['password']));
    // $confirm_password = enc_pw(validate_input($_POST['confirm_password']));
    require_once('../connect.php');
    $sql = "SELECT * FROM `admin` WHERE `AdminName` = '$admin_name' AND `Password` =  '$password'";
    $res_admin = mysqli_query($conn, $sql);
    if($row_admin = mysqli_fetch_assoc($res_admin)){
        $_SESSION['AdminName'] = $row_admin['AdminName'];
        $_SESSION['admin'] = true;
        header("Location: ../index.php");
    }
    else{
        $message = 'Error in username or password';
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
            <td><label for="password">Password:</label></td>
            <td><input type="password" id="password" name="password" required></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Sign Up</button></td>
        </tr>
    </table>
    </form>
    </body>
    </html>