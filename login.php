<?php
    require './includes/common.php';  
    if(isset($_SESSION["email"])){
        header("location:index.php");
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
        
        .container{
            margin-top: 15vh;
            margin-bottom: 15vh;
        }
        
    </style>

    <title>Document</title>
</head>

<body>

    <?php
        include './includes/header.php';
    ?>
    
    <div class="container">
    <div class="row justify-content-center">
        <div class="cd">
            <div class="card mx-auto" style="width: 30rem;">
                <div class="card-header bg-primary text-white">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    <form action="login_submit.php" method="post">
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email"  name="email">                      
                        </div>
                        <div class="mb-3">                       
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>      
                </div>
                <div class="card-footer">
                    <p>Dont have an account?<a href="signup.php">Register</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php
        include './includes/footer.php';
    ?>
</body>

</html>