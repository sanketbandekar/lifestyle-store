<?php
require './includes/common.php';
//get user id from session
$item_id = $_GET['id'];
$user_id = $_SESSION["id"];
$query = "INSERT INTO users_items(users_id, items_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$submit = mysqli_query($conn,$query) or die(mysqli_error($conn));
header("location: index.php");

?>