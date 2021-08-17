<?php
require './includes/common.php'; 

    
    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = md5($_POST['password']);

        $query = "select * from users where email_id = '$email' AND password = '$password' ";
        $submit = mysqli_query($conn,$query) or die( mysqli_error($conn));
        $count = mysqli_num_rows($submit);
        if($count == 0){
            echo "no users found";
        }else{
            $fetch = mysqli_fetch_array($submit);
            $useremail = $fetch['email_id'];
            $userpassword = $fetch['password'];
            $id = $fetch['id'];

            if($email === $useremail && $password == $userpassword){
                $_SESSION["email"]= $useremail;
                $_SESSION["id"]=$id; //verify
                header("location:index.php");
            }else{
                echo "wrong email id or password";
            }
        }
        
    }
?>