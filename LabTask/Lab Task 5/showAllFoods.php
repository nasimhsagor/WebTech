<?php  
require_once 'controller/foodInfo.php';

$food_db = fetchAllFoods();


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

	<title>All Items</title>
</head>
<body>
	<fieldset>
    <legend>All Food Items:</legend>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($food_db as $i => $food_db): ?>
			<tr>
				<td><a href="showFood.php?id=<?php echo $food_db['ID'] ?>"><?php echo $food_db['Name'] ?></a></td>
				<td><?php echo $food_db['Price'] ?></td>
				<td><?php echo $food_db['Quantity'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $food_db['image'] ?>" alt="<?php echo $food_db['Name'] ?>"></td>
				<td>
					<a href="editFood.php?id=<?php echo $food_db['ID'] ?>">Edit</a>
					&nbsp
					<a href="controller/deleteFood.php?id=<?php echo $food_db['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</fieldset>


</body>
</html>