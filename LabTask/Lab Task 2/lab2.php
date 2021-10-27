
<!DOCTYPE HTML>  
<html>
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>  
		
		<?php
			$nameErr = $emailErr = $genderErr = $dobErr = $degreeErr = $bloodErr ="";
			$name = $email = $gender = $dob = $degree = $dd = $mm = $yyyy= $blood="";
			$degree=array();
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["name"])) {
					$nameErr = "Name is required";
				} 
				
				else if(str_word_count($_POST["name"])<2){
					$nameErr = "Name Contains at least two words";
					
				}
				
				else {
					$name = $_POST["name"];
					if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
						$nameErr = "Only letters and white space allowed";
					}
				}
				
				if (empty($_POST["email"])) {
					$emailErr = "Email is required";
					} else {
					$email = $_POST["email"];
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$emailErr = "Invalid email format";
					}
				}
				
				
				
				if (empty($_POST["gender"])) {
					$genderErr = "Gender is required";
					} else {
					$gender = $_POST["gender"];
				}
				
				
				if (empty($_POST["dd"]) || empty($_POST["mm"]) || empty($_POST["yyyy"])) {
					$dobErr= "Date of birth is required";
				} 
				
				else if($_POST["dd"]<1 || $_POST["dd"] >31){
					
					$dobErr ="Day must be between 1-31";
				}
				
				
				else if($_POST["mm"]<1 || $_POST["mm"] >12){
					
					$dobErr ="Month must be between 1-12";
				}
				
				
				else if($_POST["yyyy"]<1953 || $_POST["yyyy"] >1998){
					
					$dobErr ="Year must be between 1953-1998";
				}
				
				
				else {
					$dd = $_POST["dd"];
					$mm = $_POST["mm"];
					$yyyy = $_POST["yyyy"];
				}
				
				
				if (empty($_POST["blood"])) {
					$bloodErr = "Blood Group is required";
					} else {
					$blood = $_POST["blood"];
				}
				
				
				
				
				if (empty($_POST["degree"])) {
					$degreeErr = "Degree is required";
				} 
				
				else if (count($_POST["degree"])!=2) {
					$degreeErr = "Must Have 2 Degree";
				} 
				
				
				else {
					$degree = $_POST["degree"];
				}	
			}
			
			
		?>
		
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			
			
			<fieldset style="width:250px;height: 55px;">
				<legend>NAME</legend>
				<input type="text" name="name" value="<?php echo $name;?>">
				<span class="error"><?php echo $nameErr;?></span>
				<hr>
			</fieldset>
			
			<fieldset style="width:250px;height: 55px;">
				<legend>EMAIL</legend>
				<input type="text" name="email" value="<?php echo $email;?>">
				<span class="error"><?php echo $emailErr;?></span>
				<hr>
			</fieldset>
			
			<fieldset style="width:250px;height: 55px;">
				<legend>DATE OF BIRTH</legend>
				<input type="text" name="dd" placeholder="dd" value="<?php echo $dd;?>" size="2"> / 
				<input type="text" name="mm" placeholder="mm" value="<?php echo $mm;?>" size="2"> / 
				<input type="text" name="yyyy" placeholder="yyyy" value="<?php echo $yyyy;?>" size="2">
				<span class="error"><?php echo $dobErr;?></span>
				<hr>
			</fieldset>
			
			
			<fieldset style="width:250px;height: 55px;">
				<legend>Gender</legend>
				<input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Other">Other
				
				<span class="error"><?php echo $genderErr;?></span>
				<hr>
			</fieldset>
			
			
			<fieldset style="width:250px;height: 55px;">
				<legend>DEGREE</legend>
				<input type="checkbox" name="degree[]" value="SSC">SSC
				<input type="checkbox" name="degree[]" value="HSC">HSC
				<input type="checkbox" name="degree[]" value="BSc">BSc
				<input type="checkbox" name="degree[]" value="MSc">MSc
				
				<span class="error"><?php echo $degreeErr;?></span>
				<hr>
			</fieldset>
			
			
			<fieldset style="width:250px;height: 55px;">
				<legend>BLOOD GROUP</legend>
				<select name="blood">
					<option value=""> </option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
				</select>
				<span class="error"><?php echo $bloodErr;?></span>
				<hr>
				<input type="submit" name="submit" value="Submit">  
			</fieldset>
			
			
		</form>
		
		<?php
			echo "<h2>Output:</h2>";
			echo $name;
			echo "<br>";
			echo $email;
			echo "<br>";
			echo $dd."/".$mm."/".$yyyy;;
			echo "<br>";
			echo $gender;
			echo "<br>";
			foreach($degree as $value)
			{echo $value.",";}
		    echo "<br>";
			echo $blood;
			
		?>
	</body>
</html>
