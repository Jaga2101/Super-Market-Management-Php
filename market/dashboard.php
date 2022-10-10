<?php
session_start();
?>


<html>
    <head>
        <title>Kanna Super Market</title>
        <link rel="stylesheet" href="dashboard.css">
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
        
        <!--Dashboard Start-->

        <br><br>
        <div class="content">
        
            <form><br>
                <label for="Categorys">Categories</label><br><br>
                <input type="number" placeholder="15"><br><br>
                <button>Check</button>
            </form>&nbsp;
            <form><br>
                <label for="Companys">Companies</label><br><br>
                <input type="number" placeholder="10"><br><br>
                <button>Check</button>
            </form><br>
            <font color="white">...Sample line of html and css and php.........</font>
            <form><br>
                <label for="products">Products</label><br><br>
                <input type="number" placeholder="20"><br><br>
                <button>Check</button>
            </form>&nbsp;
            <form><br>
                <label for="products">Products</label><br><br>
                <input type="number" placeholder="20"><br><br>
                <button>Check</button>
            </form>
        
            
        </div>
        <!--Dashboard End-->
    </body>
</html>