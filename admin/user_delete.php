<?php
require_once('../connect.php');

if (isset($_GET['User_ID'])) {
    $id = intval($_GET['User_ID']);
    $sql = "DELETE FROM user WHERE User_ID = $id";
    if (mysqli_query($conn, $sql)) {
        header('Location: user.php');
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No User_ID specified.";
}
?>