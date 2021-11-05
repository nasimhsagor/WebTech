<?php 

require_once 'controller/foodInfo.php';
$food_db = fetchFood($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateFood.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $food_db['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="price">Price:</label><br>
  <input value="<?php echo $food_db['Price'] ?>" type="text" id="price" name="price"><br>
  <label for="quantity">Quantity:</label><br>
  <input value="<?php echo $food_db['Quantity'] ?>" type="text" id="quantity" name="quantity"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateFood" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

