<?php
include"./includes/common.php";
if(!isset($_SESSION['email'])){
    header("location:main.php");
}
$datas =$_GET['item_id'];
$values = explode(",","$datas");
foreach($values as $data) {
    $query = "UPDATE users_items SET status = 'Confirmed' WHERE items_id = '$data' ";
    $submit = mysqli_query($conn,$query) or die(mysqli_error($conn));
}

echo "your order was successfull"."<br>";
echo "<a href='index.php'>Click here to continue shopping</a>";
?>