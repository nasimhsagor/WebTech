<?php 

require_once ('model/model.php');

function fetchAllFoods(){
	return showAllFoods();

}
function fetchFood($id){
	return showFood($id);

}
