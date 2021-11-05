
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
  </head>
  <body>
<?php 
    include "nav.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findFood.php">
      <fieldset>
    <legend><h4>SEARCH FOR FOODS:</h4></legend>
      <input type="text" name="food_name" />
      <input type="submit" name="findFood" value="Search"/>
    </form>
  </fieldset>


 
  </body>
</html>