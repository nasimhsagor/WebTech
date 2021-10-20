<?php


$name = $gender = $dob = $email = $degree = $bloodGroup = "";

$nameErr = $genderErr = $dobErr = $emailErr = $bloodGroupErr = "";
$flag = false;

if($_SERVER['REQUEST_METHOD'] == "POST"){

	$name = $_POST['name'];
	$dob = $_POST['birthday'];
    $gender= $_POST['gender'];
    $degree = $_POST['degree'];
	$bloodGroup = $_POST['blood'];

    if(empty($_POST['name'])) {
    	$nameErr = "Name can't be empty!";
    	$flag = true;
    }
    if(empty($_POST['birthday'])) {
    	$dobErr = "DOB can't be empty!";
    	$flag = true;
    }
    if(empty($_POST['gender'])) {
    	$genderErr = "Gender can't be empty!";
    	$flag = true;
    } 
    
    if(empty($_POST['degree'])) {
    	$degreeErr = "Degree can't be empty!";
    	$flag = true;
    }
    if(empty($_POST['blood'])) {
    	$bloodGroupErr = "Blood group address can't be empty!";
    	$flag = true;
    }
    if(!$flag) {
    	echo "Succesfull";
    }
    
}

 function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
}
          
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form:</h1>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
	<fieldset>	
    <legend>NAME</legend>
		    <input type="text" id="name" name="name">
		    <?php echo $nameErr; ?><br>
    </fieldset>
    <br><br> 

    <fieldset>
    <legend>EMAIL</legend>
       		<input type="email" id="email" name="email">
       		<?php echo $emailErr; ?>
</fieldset>
<br><br> 

<fieldset>
<legend>DATE OF BIRTH</legend>
   			<input type="date" id="birthday" name="birthday">
   			<?php echo $dobErr; ?>
      </fieldset>

      <br><br> 

      <fieldset>
      <legend>GENDER</legend>
      <input type="radio" id="male" name="gender" value="male">
   		    <label for="male">Male</label>
   		    <br>
    		<input type="radio" id="female" name="gender" value="female">
    		<label for="female">Female</label>
    		<?php echo $genderErr; ?>
            </fieldset>

            <br><br> 
            <fieldset>
      <legend>DEGREE</legend>
      <input type="radio" id="ssc" name="degree" value="ssc">
   		    <label for="male">SSC</label>
   		    <br>
    		<input type="radio" id="hsc" name="degree" value="ssc">
    		<label for="ssc">HCS</label>
            <br>
    		<input type="radio" id="bsc" name="degree" value="bsc">
    		<label for="bsc">Bsc</label>
            <br>
    		<input type="radio" id="msc" name="degree" value="msc">
    		<label for="msc">Msc</label>
    		<!--<?php echo $genderErr; ?>-->
            </fieldset>
   
        <br><br>       
		<fieldset>
			<legend>BLOOD GROUP</legend>
            <select id="blood" name="blood">
    			<option value="bpos">B+</option>
    			<option value="apos">A+</option>
    			<option value="opos">O+</option>
    			<option value="aneg">A-</option>
    		</select>
    		<?php echo $bloodGroupErr; ?>
			
		</fieldset>
		<br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>