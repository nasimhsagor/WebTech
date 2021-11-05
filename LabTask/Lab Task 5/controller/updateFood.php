<?php  
require_once '../model/model.php';


if (isset($_POST['updateFood'])) {
	$data['name'] = $_POST['name'];
	$data['price'] = $_POST['price'];
	$data['quantity'] = $_POST['quantity'];
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updateFood($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showFood
  	header('Location: ../showFood.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>