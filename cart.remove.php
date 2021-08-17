<?php
require'./includes/common.php';
$users_products_id = $_GET['remove_id'];
$users_id= $_SESSION["id"];
$query = "DELETE FROM users_items WHERE users_id = $users_id AND id = $users_products_id ";
$submit = mysqli_query($conn,$query) or die(mysqli_error($conn));
header("location:cart.php");
?>