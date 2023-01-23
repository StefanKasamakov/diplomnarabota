<?php
include 'connect.php';

$product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
$new_price = mysqli_real_escape_string($conn, $_POST['new_price']);

$query = "UPDATE products SET price='$new_price' WHERE id='$product_id'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
