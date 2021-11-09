<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="../View/dashbord.php" class="navbar-brand"><span class="glyphicon glyphicon-cutlery"></span>  Chef's Place</a>

                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="../View/cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="../View/settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="../View/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <li><a href="../View/about.php"><span class="glyphicon glyphicon-log-in"></span> About</a></li>
                           <li><a href="../View/contact.php"><span class="glyphicon glyphicon-log-in"></span> Contact</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="../View/registration.php"><span class="glyphicon glyphicon-user"></span> Registration</a></li>
                           <li><a href="../View/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <li><a href="../View/about.php"><span class="glyphicon glyphicon-log-in"></span> About</a></li>
                           <li><a href="../View/contact.php"><span class="glyphicon glyphicon-log-in"></span> Contact</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>