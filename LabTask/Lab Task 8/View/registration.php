<?php
    require '../Model/DBConnect.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/cp.jpg" />
        <title> Chef's Place</title>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br>
            <center>
                    <div>
                        <h3>Registration</h3>
                       <form method="post" action="../Controller/registrationCheck.php">
                            <div>
                                <input type="text" name="name" placeholder="Name" required="true">
                            </div>
                            <br>
                            <div>
                                <input type="text" name="uname" placeholder="UserName" required="true">                            
                            </div>
                            <br>
                            <div>
                                <input type="email" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <br>
                            <div>
                                <input type="password" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
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
                                <input type="text" name="gender" placeholder="Gender" required="true">
                            </div>
                            <br>
                             <div>
                           <input type="date" name="dob" required="true">
                           </div>
                           <br>
                            
                            <div>
                                <input type="submit" value="Sign Up">
                            </div>
                        </form>
                    </div>
                </div>
            </center>
            <br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                
               
               </div>
           </footer>

        </div>
    </body>
</html>