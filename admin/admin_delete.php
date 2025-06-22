<?php
require_once('../connect.php');

if (isset($_GET['Admin_ID'])) {
    $id = intval($_GET['Admin_ID']);
    $sql = "DELETE FROM admin WHERE Admin_ID = $id";
    if (mysqli_query($conn, $sql)) {
        header('Location: admin.php');
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No Admin_ID specified.";
}
?>