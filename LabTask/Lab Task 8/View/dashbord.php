<?php
session_start();
require '../Controller/check_if_added.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../img/cp.jpg" />
<title>Chef's Place</title>
<style>
img {
border: 1px solid #ddd;
border-radius: 4px;
padding: 5px;
width: 150px;
}
img:hover {
box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>
</head>
<body>
<div>
<?php
require 'header.php';
?>
<center>
<div>
<h1>Welcome to our Restaurant!</h1>
<p>We have the best foods, drinks and steaks for you. No need to hunt around, we have all in one place.</p>
</div>
</center>
<center>
<div>
<a href="cart.php">
<img src="../img/biriyani.jpg" alt="Biriyani">
</a>
</center>
<center>
<div>
<h3>Kacchi</h3>
<p>Price: 340 Taka</p>
<?php if(!isset($_SESSION['email'])){  ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
<?php
}
else{
if(check_if_added_to_cart(1)){
echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
}else{
?>
<a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
<?php
}
}
?>
</div>
</center>
<center>
<div>
<a href="cart.php">
<img src="../img/kebab.jpg" alt="kebab">
</a>
</center>
<center>
<div>
<h3>Kebab</h3>
<p>Price: 180 Taka</p>
<?php if(!isset($_SESSION['email'])){  ?>
<p><a href="../View/login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
<?php
}
else{
if(check_if_added_to_cart(2)){
echo 'Added';
}else{
?>
<a href="cart_add.php?id=2" name="add" value="add">Add to cart</a>
<?php
}
}
?>
</div>
</center>
</div>
<center>
<div>
<a href="cart.php">
<img src="../img/polaos.jpeg" alt="Polao">
</a>
</center>
<center>
<div>
<h3>Polao</h3>
<p>Price: 100 Taka</p>
<?php if(!isset($_SESSION['email'])){  ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
<?php
}
else{
if(check_if_added_to_cart(3)){
echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
}else{
?>
<a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
<?php
}
}
?>
</div>
</center>
<center>
<div>
<a href="cart.php">
<img src="../img/legroast.jpg" alt="Mutton">
</a>
</center>
<center>
<div>
<h3>Mutton Leg</h3>
<p>Price: 800 Taka</p>
<?php if(!isset($_SESSION['email'])){  ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
<?php
}
else{
if(check_if_added_to_cart(4)){
echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
}else{
?>
<a href="../Controller/cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
<?php
}
}
?>
</div>
</center>
<br><br><br><br><br><br><br><br>
<footer class="footer">
<div class="container">
</div>
</footer>
</body>
</html>