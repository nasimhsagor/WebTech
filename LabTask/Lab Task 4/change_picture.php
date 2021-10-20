<!----           CHANGE PICTURE.php                  ----->

<?php include 'profile_header.php' ?>

<div class="single2">
	<table>
		<tbody >
			<tr>
				
				<?php include 'sidebar.php' ?>
				
				
				<td style="width: 630px;">
					<div style="padding-left:10px;">
						<fieldset style="width:580px;height: 205px;">
							
							<legend><b>PROFILE PICTURE</b></legend>
							<div style="padding:5px;">
								<img src="thumnail.jpg" style="width: 100px;height: 100px;" alt="photo">
							</div>
							
							<div style="padding:5px;">
								<span><input type="file" name="fileToUpload">
									<span class="error"></span>
								</span></div>
								
								<hr>
								<div style="padding:5px;">
									<input type="submit" name="submit3" value="Submit"> 
									
									
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