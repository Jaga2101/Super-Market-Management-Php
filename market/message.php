<?php
if(isset($_SESSION['message']))
{
?>
<head>
<link rel="stylesheet" href="message.css">
</head>
<body>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
           &nbsp; <strong>Message!</strong>
            <?=  $_SESSION['message']; ?>
        </div>

</body>
<?php
unset($_SESSION['message']);
}
?>