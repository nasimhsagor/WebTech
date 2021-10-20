<!----           REGISTRATION.php                  ----->

<?php include 'header.php' ?>



<div class="single">
	<form method="post" action="/">  
		
		<fieldset style="width:360px; ">
			
			<legend><b>REGISTRATION</b></legend>
			<div style="padding:5px;">
				<span style="padding-right:100px;">Name</span>: <input type="text" name="password" value="">
				<span class="error"></span>
			</div>
			
			<div style="padding:5px;">
				<span style="padding-right:100px;">Email</span>: <input type="text" name="password" value="">
				<span class="error"></span>
			</div>
			
			
			
			<div style="padding:5px;">
				<span style="padding-right:68px;">User Name</span>: <input type="text" name="password" value="">
				<span class="error"></span>
			</div>
			
			<div style="padding:5px;">
				<span style="padding-right:80px;">Password</span>: <input type="text" name="password" value="">
				<span class="error"></span>
			</div>
			
			
			<div style="padding:5px;">
				<span style="padding-right:20px;">Confirm Password</span>: <input type="text" name="password" value="">
				<span class="error"></span>
			</div>
			
			<div style="padding:5px;">
				<fieldset>
					<legend>Gender</legend>
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
					<input type="radio" name="gender" value="Other">Other
					
					<span class="error"></span>
					<hr>
				</fieldset>
			</div>
			
			
			<div style="padding:5px;">
				<fieldset>
					<legend>DATE OF BIRTH</legend>
					<input type="text" name="dd" placeholder="dd" value="" size="2"> / 
					<input type="text" name="mm" placeholder="mm" value="" size="2"> / 
					<input type="text" name="yyyy" placeholder="yyyy" value="" size="2">
					<span class="error"></span>
					<hr>
				</fieldset>
			</div>
			
			
			
			
			
			
			
			
			
			<hr>
			<div style="padding:5px;">
				<input type="submit" name="submit2" value="Submit"> 
				
				
			</div>
		</fieldset>
		
	</form>
	
</div>

<?php include 'footer.php' ?>
<!----           End                  ----->