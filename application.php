<?php
	include "header.php";
	include "dbconnect.php";
	
	$sql="SELECT * FROM courses";
	$result=$conn->query($sql);
	
?>		
	<div class="apply">
		<h3 align="center">Application form</h3>
	    <form action="application_action.php" method="POST">
		
			<label>Name</label>
			<input type="text" name="name" placeholder=" Enter Your name">
			<label>Email</label>
			<input type="text" name="email" placeholder=" Enter Your email">
			<label>Phone</label>
			<input type="text" name="phone" placeholder="Enter Your phone">
			<label>Gender</label>
			<input type="radio" name="gender" value="Male"> Male
			<input type="radio" name="gender" value="Female"> Female <br> <br>
			<label>Date of Birth</label>
			<input type="date" name="dob">

			</select>
			<input type="submit" value="Submit">
		  </form>
	</div>
	
<?php
	include "footer.php";
?>


