<?php

require_once '../model/model.php';

if (isset($_POST['findFood'])) {
	
		echo $_POST['food_name'];

    try {
    	
    	$allSearchedFoods = searchFood($_POST['food_name']);
    	require_once '../showSearchedFood.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

