<?php
    require "./includes/common.php";


    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $query = "select * from users where email_id = '$email'";
    $submit = mysqli_query($conn,$query) or die( mysqli_error($conn));
    $count = mysqli_num_rows($submit);

    if($count>0){
        echo "User with same email id already exists";
    }else{
        $query = "insert into users( name, email_id, password, contact_number, city, address) values 
        ('$name', '$email', '$password', '$phone', '$city', '$address')";
        $submit = mysqli_query($conn, $query) or die(mysqli_error($conn));
        echo "User Successfully Inserted";
        $_SESSION["email"]= $email;
        $_SESSION["id"] = mysqli_insert_id($conn);
        header("location:index.php");
    }

   

   
    
?>