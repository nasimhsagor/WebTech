<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="../img/cp.jpg" />
        <title> Chef's Place</title>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="panel-body">
                <p>You have been logged out. <a href="login.php">Login again.</a></p>
            </div>
            <meta http-equiv="refresh" content="2;url=../index.php" />
            <footer class="footer">
               <div class="container">
               </div>
           </footer>
        </div>
    </body>
</html>
