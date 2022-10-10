<?php
session_start();
require 'dbcon.php';
?>


<html>
    <head>
        <title>Kanna Super Market</title>
        <link rel="stylesheet" href="product.css">
    </head>
    <body>
        <header>Kanna Super Market</header>
        <div class="nav-bar">
            <ul><br><br>
                <li><a href="Dashboard.php"> Dashboard</a></li><br>
                <li><a href="Category.php">Categorys</a></li><br>
                <li><a href="Company.php">Companys</a></li><br>
                <li><a href="Product.php">products</a></li><br>
                <li> <a href="#">Billing </a></li><br>
                <li><a href="#">Reports</a></li><br>
                <li><a href="index.php">Logout</a></li><br>
            </ul>
        </div>
        
        <!--Company Start-->
        <div class="content">
        <?php include('message.php'); ?>
            <div class="pro">
            <h2>Product<button><a href="product.php">Back</a></button></h2>
            </div>
            <form action="code.php" method="POST">
                <h3>Add Products</h3>
                <label for="product">Product ID</label>
                <input type="text" placeholder="Product ID" name="proco" required>
                <label for="product">Product Name</label>
                <input type="text" placeholder="Product Name" name="names" required>
                <label for="category">&nbsp;Category &nbsp;</label>
                <input type="text" placeholder="Category Name" name="cate" required>
                <label for="Company">&nbsp;&nbsp;&nbsp;Company&nbsp;&nbsp;&nbsp;&nbsp; </label>
                <input type="text" placeholder="Company Name" name="company" required>
                <label for="price">&nbsp;&nbsp;Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="number" placeholder="Product Price" name="price" required><br><br>
                <center><button  type="submit" name="save_product">Add Product</button></center>
            </form>
        </div>
        <!--Company End-->
    </body>
</html>