<?php
    require './includes/common.php';
    if (isset($_SESSION['email'])) 
    { 
        header('location: index.php'); 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--bootstrap v4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <style>
        
        .bg{
            background-image: url(./img/background_img.jpg);
            position: fixed;
            height: 95vh;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: antiquewhite;
            

        }
        .text{
            position: relative;
            padding-top: 6%;
            padding-bottom: 6%;
            margin-top: 12vh;
            margin-bottom: 12vh;
            background-color: rgba(0,0,0,0.7);
            max-width: 660px;
        }
    </style>

    <title>LifeStyleStore</title>
</head>

<body>
    <?php
        include './includes/header.php';
    ?>

    <div class="bg">
        <div class="container">
            <div class="text mx-auto text-center">
                <h2>We Sell LifeStyle</h2>
                <h4>min 40% off</h4> <br> <br>
                <a href="#" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
        </div>
    </div>

    <?php
        include './includes/footer.php';
    ?>

    
</body>

</html>