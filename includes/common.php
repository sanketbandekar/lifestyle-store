<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "store";
    $conn = new mysqli($servername, $username, $password, $dbName) or die(mysqli_error($conn));

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>