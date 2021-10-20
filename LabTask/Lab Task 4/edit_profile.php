<!----           EDIT PROFILE.php                  ----->

<?php include 'profile_header.php' ?>

<div class="single2">
	<table>
		<tbody >
			<tr>
				
				<?php include 'sidebar.php' ?>
				
				
				<td style="width: 630px;">
					<div style="padding-left:10px;">
						<fieldset style="width:580px; height: 170px;">
							
							<legend><b>Edit Profile</b></legend>
							<div style="padding:5px;">
								<span style="padding-right:100px;">Name</span>: <input type="text" name="password" value="Bob">
								<span class="error"></span>
							</div>

							<div style="padding:5px;">
								<span style="padding-right:100px;">Email</span>: <input type="text" name="password" value="bob@aiub.edu">
								<span class="error"></span>
							</div>

							<div style="padding:5px;">
								<span style="padding-right:92px;">Gender</span>: 
								<input type="radio" name="password" value="">Male
								<input type="radio" name="password" value="">Female
								<input type="radio" name="password" value="">Other
								<span class="error"></span>
							</div>


							<div style="padding:5px;">
								<span style="padding-right:50px;">Date Of Birth</span>: <input type="text" name="password" value="23/12/1999">
								<span class="error"></span>
							</div>
							
							
							
							
							
							
							
							
							
							<hr>
							<div style="padding:5px;">
								<input type="submit" name="submit2" value="Submit"> 
								
								
							</div>
						</fieldset>
					</div>
					
				</td>
			</tr>
		</tbody>
	</table>
</div>





<?php include 'footer.php' ?>
<!----           End                  ----->