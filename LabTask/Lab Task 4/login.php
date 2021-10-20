<!----           LOGIN.php                  ----->


<?php include 'header.php' ?>



		<div class="single">
				<form method="post" action="/">  
					
					
					<fieldset align="left" style="width:320px;height: 170px;">
						
						<legend><b>LOGIN</b></legend>
						<div style="padding:5px;">
							User Name: <input type="text" name="username" value="">
							<span class="error"></span>
						</div>
						
						<div style="padding:5px;">
							Password  :&nbsp;&nbsp; <input type="text" name="password" value="">
							<span class="error"></span>
						</div>
						
						<hr>
						
						<input type="checkbox" name="remember" value="1">Remember Me
						
						<div style="padding:5px;">
							<input type="submit" name="submit" value="Submit"> 
							<a href="#">Forgot Password?</a>
							
						</div>
					</fieldset>
					
				</form>
				
			</div>

<?php include 'footer.php' ?>