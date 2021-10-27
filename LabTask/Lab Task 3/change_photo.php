
<!DOCTYPE HTML>  
<html>
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>  
		
		<?php
			$nameErr = $emailErr = $genderErr = $dobErr = $degreeErr = $bloodErr = $usernameErr= $passwordErr="";
			$name = $email = $gender = $dob = $degree = $dd = $mm = $yyyy= $blood= $username = $password = "";
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
			
			
			<fieldset style="width:320px;height: 170px;">
				
				<legend><b>LOGIN</b></legend>
				<div style="padding:5px;">
				User Name: <input type="text" name="username" value="<?php echo $username;?>">
				<span class="error"><?php echo $usernameErr;?></span>
				</div>
				
				<div style="padding:5px;">
				Password  :&nbsp;&nbsp; <input type="text" name="password" value="<?php echo $password;?>">
				<span class="error"><?php echo $passwordErr;?></span>
				</div>
				
				<hr>
				
				<input type="checkbox" name="remember" value="1">Remember Me
				
				<div style="padding:5px;">
				<input type="submit" name="submit" value="Submit"> 
				<a href="#">Forgot Password?</a>
				
				</div>
			</fieldset>
			
			
			<fieldset style="width:320px; height: 170px;">
				
				<legend><b>CHANGE PASSWORD</b></legend>
				<div style="padding:5px;">
				<span style="padding-right:40px;">Current Password</span>: <input type="text" name="username" value="<?php echo $username;?>">
				<span class="error"><?php echo $usernameErr;?></span>
				</div>
				
				<div style="padding:5px;">
				<span style="padding-right:58px;color:green;">New Password</span>: <input type="text" name="password" value="<?php echo $password;?>">
				<span class="error"><?php echo $passwordErr;?></span>
				</div>
				
				
				<div style="padding:5px;">
				<span style="padding-right:10px;color:red;">Retype New Password</span>: <input type="text" name="password" value="<?php echo $password;?>">
				<span class="error"><?php echo $passwordErr;?></span>
				</div>
				
				<hr>
				<div style="padding:5px;">
				<input type="submit" name="submit" value="Submit"> 
				
				
				</div>
			</fieldset>
			
			
			
			<fieldset style="width:320px;height: 205px;">
				
				<legend><b>PROFILE PICTURE</b></legend>
				<div style="padding:5px;">
				<img src="thumnail.jpg" style="width: 100px;height: 100px;" alt="photo">
				</div>
				
				<div style="padding:5px;">
				<span><input type="file" name="password" value="<?php echo $password;?>">
				<span class="error"><?php echo $passwordErr;?></span>
				</div>
				
				<hr>
				<div style="padding:5px;">
				<input type="submit" name="submit" value="Submit"> 
				
				
				</div>
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
