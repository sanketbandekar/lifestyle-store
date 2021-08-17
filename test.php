<?php
require'./includes/common.php';
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
        .cd {
            position: absolute;
            top: 25vh;
        }
    </style>

    <title>Document</title>
</head>
<body>

    <?php
    include './includes/test.includes.php';
    ?>
        
        <div class="row justify-content-center">
        <div class="cd">
            <div class="card mx-auto" style="width: 30rem;">
                <div class="card-header bg-primary text-white">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    <form action="settings.script.php" method="post">
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Old Password"  name="old_password">                      
                        </div>
                        <div class="mb-3">                       
                            <input type="password" class="form-control" placeholder="New Password" name="new_password">
                        </div>
                        <div class="mb-3">                       
                            <input type="password" class="form-control" placeholder="Retype New Password" name="retype_password">
                        </div>
                        <button type="submit" class="btn btn-primary" name="confirm">Confirm</button>
                    </form>      
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark fixed-bottom text-white text-center p-2">
        <p>Copyright © Lifestyle Store. All Rights
            Reserved” and Contact Us: +91 90000 00000</p>
    </footer>
    
</body>
</html>