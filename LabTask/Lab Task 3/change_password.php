
<!DOCTYPE HTML>  
<html>
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>  
		
		<?php
			$usernameErr= $passwordErr= $passwordErr2 = $newpasswordErr= $rpasswordErr= $photoErr = "";
			$username = $password =$password2= $newpassword = "";
			$degree=array();
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				if (isset($_POST["submit2"])) {
					
					
					
					
					
					
					
					
					if($_POST["rnewpassword"]!=$_POST["newpassword"])
					{
						$newpasswordErr = "New Password & Retype New Password not Matched";
					}
					
					else{
						
						$password2 = $_POST["newpassword"];
						// Validate password strength
						$uppercase = preg_match('@[A-Z]@', $password2);
						$lowercase = preg_match('@[a-z]@', $password2);
						$number    = preg_match('@[0-9]@', $password2);
						$specialChars = preg_match('@[^\w]@', $password2);
						
						if (empty($password2)) {
							$passwordErr = "Password is required";
						} 
						
						else if( !$specialChars || strlen($password2) < 8) {
							$passwordErr2 = 'Password should be at least 8 characters and one special character.';
							}else{
							$password2 = $_POST["password"];
						}
						
					}
					
					
					
					
					
				}
				
				if (isset($_POST["submit1"])) {
					
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
				
				
				
				
				
				
				if (isset($_POST["submit3"])) {
				
					
					$target_dir = "uploads/";
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
					// Check if image file is a actual image or fake image
					if(isset($_POST["submit"])) {
						$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
						if($check !== false) {
							$photoErr = "File is an image - " . $check["mime"] . ".";
							$uploadOk = 1;
							} else {
							$photoErr = "File is not an image.";
							$uploadOk = 0;
						}
					}
					
					// Check if file already exists
					if (file_exists($target_file)) {
						$photoErr = "Sorry, file already exists.";
						$uploadOk = 0;
					}
					
					// Check file size
					if ($_FILES["fileToUpload"]["size"] > 400000) {
						$photoErr = "Sorry, your file is too large.";
						$uploadOk = 0;
					}
					
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
						$photoErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						$uploadOk = 0;
					}
					
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
						$photoErr = "Sorry, your file was not uploaded.";
						// if everything is ok, try to upload file
						} else {
						if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
							$photoErr = '<p style="color:green;">The file '. basename( $_FILES["fileToUpload"]["name"]). ' has been uploaded.</p>';
							} else {
							$photoErr =  "Sorry, there was an error uploading your file.";
						}
					}
					
					
					
					
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
					<input type="submit" name="submit1" value="Submit"> 
					<a href="#">Forgot Password?</a>
					
				</div>
			</fieldset>
		</form>	
		
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">	
			
			<fieldset style="width:320px; height: 170px;">
				
				<legend><b>CHANGE PASSWORD</b></legend>
				<div style="padding:5px;">
					<span style="padding-right:40px;">Current Password</span>: <input type="text" name="password" value="<?php echo $password;?>">
					<span class="error"></span>
				</div>
				
				<div style="padding:5px;">
					<span style="padding-right:58px;color:green;">New Password</span>: <input type="text" name="newpassword" value="<?php echo $newpassword;?>">
					<span class="error"><?php echo $passwordErr2;?><?php echo $newpasswordErr;?></span>
				</div>
				
				
				<div style="padding:5px;">
					<span style="padding-right:10px;color:red;">Retype New Password</span>: <input type="text" name="rnewpassword" value="">
					<span class="error"><?php echo $rpasswordErr;?></span>
				</div>
				
				<hr>
				<div style="padding:5px;">
					<input type="submit" name="submit2" value="Submit"> 
					
					
				</div>
			</fieldset>
			
		</form>
		
		
		<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<fieldset style="width:320px;height: 205px;">
				
				<legend><b>PROFILE PICTURE</b></legend>
				<div style="padding:5px;">
					<img src="thumnail.jpg" style="width: 100px;height: 100px;" alt="photo">
				</div>
				
				<div style="padding:5px;">
					<span><input type="file" name="fileToUpload">
						<span class="error"><?php echo $photoErr;?></span>
					</div>
					
					<hr>
					<div style="padding:5px;">
						<input type="submit" name="submit3" value="Submit"> 
						
						
					</div>
				</fieldset>
				
			</form>
			
			
		</body>
	</html>
