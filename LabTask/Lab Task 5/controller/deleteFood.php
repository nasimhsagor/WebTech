<?php 

require_once '../model/model.php';

if (deleteFood($_GET['id'])) {
    header('Location: ../showAllFoods.php');
}

 ?>