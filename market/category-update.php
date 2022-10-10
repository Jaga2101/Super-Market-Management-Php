<?php
session_start();
require 'dbcon.php';
?>


<html>
    <head>
        <title>Kanna Super Market</title>
        <link rel="stylesheet" href="style.css">
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
        
        <!--Category Start-->
        <div class="content">
            <div class="pro">
                <h2>Category<!--<button><a href="category.php">Back</a></button>--></h2>
            </div>
            <?php
if(isset($_GET['id']))
{
    $id = mysqli_real_escape_string($con,$_GET['id']);
    $query ="SELECT * FROM `category's` WHERE id='$id' ";
    $query_run = mysqli_query($con,$query);

    if(mysqli_num_rows($query_run) > 0)
    {
      $list = mysqli_fetch_array($query_run);
      ?>
            <form action="code.php" method="POST">
                <h3>Edit Product Category</h3>
                <input type="hidden" name="id" value="<?= $list['id'];?>" >
                <label for="category">Category Name</label>
                <input type="text" placeholder="Category Name"  value="<?= $list['cate'];?>" name="cate" required>
                <label for="code">Category Code</label>
                <input type="text" placeholder="Category Code"  value="<?= $list['code'];?>" name="code" required><br><br>
                <center><button  type="submit" name="update_category" >Update Category</button></center>
            </form>
            <?php
    }
    else
    {
      echo"<h4>No Records</h4>";
    }
}
?>
            
        </div>
        <!--Category End-->
    </body>
</html>