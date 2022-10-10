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
        <?php include('message.php'); ?>
            <div class="pro">
                <h2>Category<button><a href="category.php">Back</a></button></h2>
            </div>
            
            <form action="code.php" method="POST">
                <h3>Add Product Category</h3>
                <label for="category">Category Name</label>
                <input type="text" placeholder="Category Name" name="cate" required>
                <label for="code">Category Code</label>
                <input type="text" placeholder="Category Code" name="code" required><br><br>
                <center><button  type="submit" name="save_category" >Create Category</button></center>
            </form>
            
        </div>
        <!--Category End-->
    </body>
</html>