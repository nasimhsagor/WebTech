<?php
    session_start();
    require '../Model/DBConnect.php';
    if(!isset($_SESSION['email'])){
        header('location:../index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="../img/cp.jpg"/>
        <title>Setting</title>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div>
                <center>
                <h3>Change Account Details</h3>
                    <form method="post" action="../Controller/settingCheck.php">
                        <div>
                            <input type="text" name="name" placeholder="Name" required="true">
                        </div>

                            <br>

                        <div>
                            <input type="text" name="uname" placeholder="UserName" required="true">
                        </div>
                            <br>
                        <div>
                            <input type="password" name="oldPassword" placeholder="Old Password">
                        </div>

                            <br>

                        <div>
                            <input type="password" name="newPassword" placeholder="New Password">
                        </div>

                            <br>

                        <div>
                            <input type="password" name="retype" placeholder="Re-type new password">
                        </div>

                            <br>
                        <div>
                            <input type="text" name="address" placeholder="Address" required="true">
                        </div>

                        <br>

                        <div> 
                            <input type="tel" name="mobile" placeholder="Phone" required="true">
                        </div>
                        <br>
                        <div>
                            <input type="submit" value="Change">
                        </div>
                        </form>
                        </center>
                    </div>
                </div>
            <br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center> 
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
