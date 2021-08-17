<?php
    require './includes/common.php';
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
        .container{
            margin-top: 10vh;
            margin-bottom: 10vh;
        }
        .img{
            height: 9rem;
        }
    </style>

    <title>Document</title>
</head>
<body>

    <?php
    include './includes/header.php';
    include './includes/check.if.added.php';
    ?>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-center text-bold">Welcome To Our LifeStyle Store!</h1>
            <p class="lead text-center">
                We have best cameras, watches and shirts for you. No need to hunt around, we have all in one place.
            </p>
        </div>
        <div class="row mb-2">
            <div class="col-sm-3">
                <div class="card mx-auto" style="width: 14rem;">
                    <img src="./img/watch1.jpg" class="card-img-top img" alt="watch1">
                    <div class="card-body">
                      <h5 class="card-title text-center">The Model #301</h5>
                      <p class="card-text text-center">Price Rs. 18000.00</p>
                      <?php if (!isset($_SESSION['email'])) {?>
                          <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else{
                             if (check_if_added_to_cart(1))
                             { //This is same as if(check_if_added_to_cart != 0) 
                                 echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart </a>'; 
                             }else{ ?>
                            <a href="cart.add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                            <?php } 
                        } ?>
                        
                      
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mx-auto" style="width: 14rem;">
                    <img src="./img/watch2.jpg" class="card-img-top img" alt="watch1">
                    <div class="card-body">
                      <h5 class="card-title text-center">The Model #301</h5>
                      <p class="card-text text-center">Price Rs. 18000.00</p>
                      <?php if (!isset($_SESSION['email'])) {?>
                          <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else{
                            if (check_if_added_to_cart(2))
                            { //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart </a>'; 
                            }else{ ?>
                            <a href="cart.add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                            <?php } 
                        } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mx-auto" style="width: 14rem;">
                    <img src="./img/watch3.jpg" class="card-img-top img" alt="watch1">
                    <div class="card-body">
                      <h5 class="card-title text-center">The Model #301</h5>
                      <p class="card-text text-center">Price Rs. 18000.00</p>
                      <?php if (!isset($_SESSION['email'])) {?>
                          <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else{
                            if (check_if_added_to_cart(3))
                            { //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart </a>'; 
                            }else{ ?>
                            <a href="cart.add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                            <?php } 
                        } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mx-auto" style="width: 14rem;">
                    <img src="./img/watch4.jpeg" class="card-img-top img" alt="watch1">
                    <div class="card-body">
                      <h5 class="card-title text-center">The Model #301</h5>
                      <p class="card-text text-center">Price Rs. 18000.00</p>
                      <?php if (!isset($_SESSION['email'])) {?>
                          <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else{
                            if (check_if_added_to_cart(4))
                            { //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart </a>'; 
                            }else{ ?>
                            <a href="cart.add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                            <?php } 
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-3">
                <div class="card mx-auto" style="width: 14rem;">
                    <img src="./img/camera1.jpg" class="card-img-top img" alt="watch1">
                    <div class="card-body">
                      <h5 class="card-title text-center">The Model #301</h5>
                      <p class="card-text text-center">Price Rs. 18000.00</p>
                      <?php if (!isset($_SESSION['email'])) {?>
                          <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else{
                            if (check_if_added_to_cart(5))
                            { //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart </a>'; 
                            }else{ ?>
                            <a href="cart.add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                            <?php } 
                        } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mx-auto" style="width: 14rem;">
                    <img src="./img/camera2.jpg" class="card-img-top img" alt="watch1">
                    <div class="card-body">
                      <h5 class="card-title text-center">The Model #301</h5>
                      <p class="card-text text-center">Price Rs. 18000.00</p>
                      <?php if (!isset($_SESSION['email'])) {?>
                          <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else{
                            if (check_if_added_to_cart(6))
                            { //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart </a>'; 
                            }else{ ?>
                            <a href="cart.add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                            <?php } 
                        } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mx-auto" style="width: 14rem;">
                    <img src="./img/camera3.jpg" class="card-img-top img" alt="watch1">
                    <div class="card-body">
                      <h5 class="card-title text-center">The Model #301</h5>
                      <p class="card-text text-center">Price Rs. 18000.00</p>
                      <?php if (!isset($_SESSION['email'])) {?>
                          <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else{
                            if (check_if_added_to_cart(7))
                            { //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart </a>'; 
                            }else{ ?>
                            <a href="cart.add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                            <?php } 
                        } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mx-auto" style="width: 14rem;">
                    <img src="./img/camera4.jpg" class="card-img-top img" alt="watch1">
                    <div class="card-body">
                      <h5 class="card-title text-center">The Model #301</h5>
                      <p class="card-text text-center">Price Rs. 18000.00</p>
                      <?php if (!isset($_SESSION['email'])) {?>
                          <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else{
                            if (check_if_added_to_cart(8))
                            { //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart </a>'; 
                            }else{ ?>
                            <a href="cart.add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                            <?php } 
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-3">
                <div class="card mx-auto" style="width: 14rem;">
                    <img src="./img/shirt1.webp" class="card-img-top img" alt="watch1">
                    <div class="card-body">
                      <h5 class="card-title text-center">The Model #301</h5>
                      <p class="card-text text-center">Price Rs. 18000.00</p>
                      <?php if (!isset($_SESSION['email'])) {?>
                          <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else{
                            if (check_if_added_to_cart(9))
                            { //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart </a>'; 
                            }else{ ?>
                            <a href="cart.add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                            <?php } 
                        } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mx-auto" style="width: 14rem;">
                    <img src="./img/shirt2.jpg" class="card-img-top img" alt="watch1">
                    <div class="card-body">
                      <h5 class="card-title text-center">The Model #301</h5>
                      <p class="card-text text-center">Price Rs. 18000.00</p>
                      <?php if (!isset($_SESSION['email'])) {?>
                          <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else{
                            if (check_if_added_to_cart(10))
                            { //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart </a>'; 
                            }else{ ?>
                            <a href="cart.add.php?item_id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                            <?php } 
                        } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mx-auto" style="width: 14rem;">
                    <img src="./img/shirt3.jpg" class="card-img-top img" alt="watch1">
                    <div class="card-body">
                      <h5 class="card-title text-center">The Model #301</h5>
                      <p class="card-text text-center">Price Rs. 18000.00</p>
                      <?php if (!isset($_SESSION['email'])) {?>
                          <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else{
                            if (check_if_added_to_cart(11))
                            { //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart </a>'; 
                            }else{ ?>
                            <a href="cart.add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                            <?php } 
                        } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mx-auto" style="width: 14rem;">
                    <img src="./img/shirt4.jpg" class="card-img-top img" alt="watch1">
                    <div class="card-body">
                      <h5 class="card-title text-center">The Model #301</h5>
                      <p class="card-text text-center">Price Rs. 18000.00</p>
                      <?php if (!isset($_SESSION['email'])) {?>
                          <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else{
                            if (check_if_added_to_cart(12))
                            { //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart </a>'; 
                            }else{ ?>
                            <a href="cart.add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                            <?php } 
                        } ?>
                    </div>
                </div>
            </div>
        </div>

          
    </div>

    <?php
    include "./includes/footer.php";
    ?>

    
</body>
</html>