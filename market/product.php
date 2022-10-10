<?php
session_start();
require 'dbcon.php';
?>

<html>
    <head>
        <title>Kanna Super Market</title>
        <link rel="stylesheet" href="table.css">
    </head>
    <body>
        <header>Kanna Super Market</header>
        <div class="nav-bar">
            <ul><br><br>
                <li><a href="Dashboard.php"> Dashboard</a></li><br>
                <li><a href="Category.php">Categorys</a></li><br>
                <li><a href="Company.php">Companys</a></li><br>
                <li><a href="product.php">products</a></li><br>
                <li> <a href="#">Billing </a></li><br>
                <li><a href="#">Reports</a></li><br>
                <li><a href="index.php">Logout</a></li><br>
            </ul>
        </div>

        <!--Product Start-->
        <div class="content">
        <?php include('message.php'); ?>
            <div class="pro">
                <h2>Product<button><a href="product-create.php">Add Product</a></button></h2>
            </div>
            <table id="customers">
                <tr>
                    <th>Code</th>
                    <th>Product</th>  
                    <th>Category</th>
                    <th>Company</th>  
                    <th>Price</th>  
                    <th>Action</th> 
                       </tr>

                       <?php
               $query = "SELECT * FROM `item's` ";
               $query_run = mysqli_query($con,$query);

               if(mysqli_num_rows($query_run) > 0)
               {
                  foreach($query_run as $list)
                  {

                    ?>
                    <tr>
                   
                    <td><?= $list['proco'];?></td>
                    <td><?= $list['names'];?></td>
                    <td><?= $list['cate'];?></td>
                    <td><?= $list['company'];?></td>
                    <td><?= $list['price'];?></td>
                    <td>
                                
                                <form action="code.php" method="POST">
                                <button class="btn"><a href="product-update.php?id=<?= $list['id']; ?>">Edit</a></button>
                        <button class="btn1" type="submit" name="delete_product" value="<?= $list['id']; ?>">Delete</button>
                        </form> 
                            </td>
                        </tr>


                    <?php
                  }
               }
               else
               {
                echo "<script> No Record Found </script>";
               }
        ?>
    
                            
        </table>
        
           
        </div>
        <!--Product End-->
    </body>
</html>