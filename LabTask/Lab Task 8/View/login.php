<?php
require '../Model/DBConnect.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="img/cp.jpg" />
<title>Chef's Place</title>
</head>
<body>
<div>
<?php
    require 'header.php';
?>
<br><br><br>
<center> 
    <div>
     <h3>LOGIN</h3>
    </div>
     <p>Login to make a purchase.</p>
        <form method="post" action="../Controller/login_submit.php">
            <div>
                <input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            </div>
            <br>
            <div>
                <input type="password" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
            </div>
            <br>
            <div>
               <input type="submit" value="Login">
            </div>
        </form>
        <br><br>
        <div>Don't have an account yet? <a href="../View/registration.php">Register</a></div>
</center>
<br><br><br><br><br>
<footer class="footer">
   <div class="container">
   </div>
</footer>
</div>
</body>
</html>
