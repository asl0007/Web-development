<?php
$user_id = $_GET['user_id'];
require 'includes/common.php';
$query = "INSERT INTO users_items(user_id, item_id, status) "
        . "VALUES('$user_id', '$item_id', 'Added to cart')";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
header('location: products.php');
?>