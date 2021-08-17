<?php
require'./includes/common.php';

if (!isset($_SESSION['email'])) 
    { 
        header('location: main.php'); 
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

    <style>
        .cd {
            position: relative;
            top: 20vh;
            margin-bottom: 20vh;
        }
    </style>

    <title>Document</title>
</head>
<body>

    <?php
    include'./includes/header.php';
    ?>

    <?php
    $user_id = $_SESSION["id"];
    $query = "select t.items_id, p.name, p.price, t.id from users_items t 
    INNER JOIN users u ON t.users_id = u.id
    INNER JOIN items p ON p.id = t.items_id 
    where t.users_id = $user_id
    order by t.users_id ASC";
    $submit = mysqli_query($conn,$query) or die(mysqli_error($conn));

    if(mysqli_num_rows($submit) == 0){
    echo "No items added to cart";

    }else{?>    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="cd">
                    <table class="table mx-auto">
                        <thead>
                          <tr>
                            <th scope="col">Item Number</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php
                         $sum=0;
                         $table_id = 0;
                         $items = array();
                         while($row = mysqli_fetch_assoc($submit)){
                            $table_id = $table_id + 1;
                            $sum = $sum + $row['price'];
                            $items[] = $row['items_id'];
                            $values = implode(",",$items);
                            //need to create an array and append all the items ids into the array to change the status to confirmed;
                            echo "<tr>
                                <td>{$table_id}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['price']}</td>
                                <td><a href='cart.remove.php?remove_id={$row['id']}' class='remove_item_link'>Remove</a></td> \n
                                </tr>";
                        }
                       
                    }
                        ?>
                          <tr class="table-active">
                            <td></td>
                            <td>Price</td>
                            <?php
                            echo"<td>{$sum}</td>";                          
                            echo"<td><a href='cart.success.php?item_id={$values}' class='btn btn-primary'>Confirm Order</a></td>";
                            ?>                           
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    include'./includes/footer.php';
    ?>
    
    
</body>
</html>