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

	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="controller/createFood.php" method="POST" enctype="multipart/form-data">
    <fieldset>
    <legend>All Food Items:</legend>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="price">Price:</label><br>
  <input type="text" id="price" name="price"><br>
  <label for="quantity">Quantity:</label><br>
  <input type="text" id="quantity" name="quantity"><br>

  <input type="file" name="image"><br><br>
  <input type="submit" name = "createFood" value="Create">
  <input type="reset"> 
  </fieldset>
</form> 

</body>
</html>

