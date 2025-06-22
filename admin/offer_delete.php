<?php
require_once('../connect.php');

if (isset($_GET['Offer_ID'])) {
    $id = intval($_GET['Offer_ID']);
    $sql = "DELETE FROM offers WHERE Offer_ID = $id";
    if (mysqli_query($conn, $sql)) {
        header('Location: offer_admin.php');
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No Offer_ID specified.";
}
?>