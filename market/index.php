<?php
session_start();
?>


<html>
    <head>
        <title>Super Market</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <br>
        <center>
        <?php include('message.php'); ?><br><br>
        <header>Kanna Super Market</header><br><br>
        <form action="code.php" method="POST">
            <h2>Admin Login</h2>
            <span>
            <label for="name">User Name</label>
            <input type="text" placeholder="User Name" name="UserName" required>
            </span>
            <span>
            <label for="password">Password</label>&nbsp;&nbsp;
            <input type="password" placeholder="Password" name="Password" required>
            </span>
            <center><button type="submit" name="save_login"  >Login</button></center>
        </form>
        </center>
        <!--<center>
        <header>Kanna Super Market</header><br><br>
        <form>
            <h2>Admin Login</h2>
            <span>
            <label for="name">User Name</label>
            <input type="text" placeholder="User Name" name="UserName" required>
            </span>
            <span>
            <label for="password">Password</label>&nbsp;&nbsp;
            <input type="password" placeholder="Password" name="Password" required>
            </span>
            <center><button type="button" onclick="check(this.form)" >Login</button></center>
        </form>
        </center>-->
        <!--<script>
            function check(form){
                if(form.UserName.value == "admin" && form.Password.value == "1234")
                {
                    alert("Admin Login Successfully")
                    window.open("Dashboard.php")
                }
                else
                {
                    alert("Incorrect User Name or Password")
                }
            }
        </script>-->
    </body>
</html>