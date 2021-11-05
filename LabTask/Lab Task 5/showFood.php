<?php  
require_once 'controller/foodInfo.php';

$food_db = fetchFood($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
<style>
fieldset {
  background-color: #eeeeee;
}

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}
</style>
	<title>Item</title>
</head>
<body>
	<fieldset>
    <legend>Food Item:</legend>

<table>
	<tr>
		<th>Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showFood.php?id=<?php echo $food_db['ID'] ?>"><?php echo $food_db['Name'] ?></a></td>
		<td><?php echo $food_db['Price'] ?></td>
		<td><?php echo $food_db['Quantity'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $food_db['image'] ?>" alt="<?php echo $food_db['Name'] ?>"></td>
	</tr>

</table>
</fieldset>


</body>
</html>