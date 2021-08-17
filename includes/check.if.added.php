<?php


function check_if_added_to_cart($item_id){
    require "common.php";
    $user_id = $_SESSION["id"];
    $query=" SELECT * FROM users_items WHERE items_id='$item_id' AND users_id ='$user_id' and status='Added to cart' ";
    $success = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($success);
    if($count >= 1){
        return 1;
    }else{
        return 0;
    }
}

?>