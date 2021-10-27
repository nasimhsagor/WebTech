
<!DOCTYPE HTML>  
<html>
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>  
		
		<?php
			$usernameErr= $passwordErr="";
			$username = $password = "";
			$degree=array();
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			  $password = $_POST["password"];
			// Validate password strength
				$uppercase = preg_match('@[A-Z]@', $password);
				$lowercase = preg_match('@[a-z]@', $password);
				$number    = preg_match('@[0-9]@', $password);
				$specialChars = preg_match('@[^\w]@', $password);
				
				if (empty($password)) {
					$passwordErr = "Password is required";
				} 

				else if( !$specialChars || strlen($password) < 8) {
					$passwordErr = 'Password should be at least 8 characters and one special character.';
				}else{
					$password = $_POST["password"];
				}
				
				if (empty($_POST["username"])) {
					$usernameErr = "User Name is required";
				}
				else if(strlen($_POST["username"]) < 2){
					$usernameErr = "User Name must contain at least 2 characters";
				}
				else{
					$username = $_POST["username"];
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

		</form>
		
		<?php
			echo "<h2>Output:</h2>";
			echo $username;
			echo "<br>";
			echo $password;
			echo "<br>";
			
			
		?>
	</body>
</html>
