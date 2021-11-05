<?php 

require_once 'db_connect.php';
$stmt = "";

function showAllFoods(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `food_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showFood($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `food_info` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchFood($food_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `food_info` WHERE Name LIKE '%$food_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addFood($data){
	$conn = db_conn();
    $selectQuery = "INSERT into food_info (Name, Price, Quantity, image)
VALUES (:name, :price, :quantity, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':price' => $data['price'],
        	':quantity' => $data['quantity'],
        	':image' => $data['image']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateFood($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE food_info set Name = ?, Price = ?, Quantity = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['price'], $data['quantity'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteFood($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `food_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}