<?php
    session_start();
    require 'DBConnect.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $uname= mysqli_real_escape_string($con,$_POST['uname']); 
    $old_password=mysqli_real_escape_string($con,$_POST['oldPassword']);
    $new_password=mysqli_real_escape_string($con,$_POST['newPassword']);
    $email=$_SESSION['email'];
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $mobile=$_POST['mobile'];
    $password_from_database_query="select name,uname,password,address,mobile from users where email='$email'";
    $password_from_database_result=mysqli_query($con,$password_from_database_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($password_from_database_result);
    if($row['password']==$old_password)
    {
       # $update_password_query="update users set name,uname,password,address,mobile='$new_password' where email='$email'";
        $update_password_query= "update users set name ='$name', uname = '$uname', password = '$new_password',address = '$address',mobile='$mobile' WHERE email = '$email'";
        $update_password_result=mysqli_query($con,$update_password_query) or die(mysqli_error($con));
        echo "Your details has been updated.";
        ?>
        <meta http-equiv="refresh" content="3;url=dashbord.php" />
        <?php
    }else
    {
        ?>
        <script>
            window.alert("Wrong password!!");
        </script>
        <meta http-equiv="refresh" content="1;url=settings.php" />
        <?php
    }
?>