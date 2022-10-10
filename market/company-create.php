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
                <h2>Company<button><a href="company.php">Back</a></button></h2>
            </div>
            <form action="code.php" method="POST">
                <h3>Add Company</h3>
                <label for="category">Company Name</label>
                <input type="text" placeholder="Category Name" name="company" required><br><br>
                <center><button  type="submit" name="save_company" >Create Company</button></center>
            </form>
        </div>
        <!--Company End-->
    </body>
</html>