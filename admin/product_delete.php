<?php
require_once('../connect.php');

if (isset($_GET['Product_ID'])) {
    $id = intval($_GET['Product_ID']);
    $sql = "DELETE FROM product WHERE Product_ID = $id";
    if (mysqli_query($conn, $sql)) {
        header('Location: product_admin.php');
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No Product_ID specified.";
}
?>