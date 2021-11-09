<?php
    session_start();
    require 'DBConnect.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/cp.jpg"/>
        <title> Chef's Place</title>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
             <div>
                <p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p>
            </div>
            <footer class="footer">
               <div class="container">
                <center> 
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
