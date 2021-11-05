
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php 
    include "nav.php";

?>

<table>
	<thead>
		<tr>
			<th>Food_id</th>
			<th>Food_name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedFoods as $i => $food_db): ?>
			<tr>
				<td><a href="../showFood.php?id=<?php echo $food_db['ID'] ?>"><?php echo $food_db['ID'] ?></a></td>
				<td><?php echo $food_db['Name'] ?></td>
				<td><a href="../editFood.php?id=<?php echo $food_db['ID'] ?>">Edit</a>&nbsp<a href="deleteFood.php?id=<?php echo $food_db['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>