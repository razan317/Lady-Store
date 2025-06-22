<?php
require_once('../connect.php');

if (isset($_GET['Item_ID'])) {
    $id = intval($_GET['Item_ID']);
    $sql = "DELETE FROM category WHERE Item_ID = $id";
    if (mysqli_query($conn, $sql)) {
        header('Location: category.php');
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No Item_ID specified.";
}
?>