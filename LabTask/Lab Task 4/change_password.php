<!----          CHANGE PASSWORD.php                  ----->

<?php include 'profile_header.php' ?>

<div class="single2">
	<table>
		<tbody >
			<tr>
				
				<?php include 'sidebar.php' ?>
				
				
				<td style="width: 630px;">
					<div style="padding-left:10px;">
						<fieldset style="width:580px; height: 170px;">
							
							<legend><b>CHANGE PASSWORD</b></legend>
							<div style="padding:5px;">
								<span style="padding-right:40px;">Current Password</span>: <input type="text" name="password" value="">
								<span class="error"></span>
							</div>
							
							<div style="padding:5px;">
								<span style="padding-right:58px;color:green;">New Password</span>: <input type="text" name="newpassword" value="">
								<span class="error"></span>
							</div>
							
							
							<div style="padding:5px;">
								<span style="padding-right:10px;color:red;">Retype New Password</span>: <input type="text" name="rnewpassword" value="">
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