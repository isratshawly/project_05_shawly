<?php
	include "dbconnect.php";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name=$_POST["name"];
		$eml=$_POST["email"];
		$phon=$_POST["phone"];
		$gen=$_POST["gender"];
		$dob=$_POST["dob"];
		
		$sql="INSERT INTO applicant(id, name, email, phone, gender,dob)
		values(NULL, '$name', '$eml', '$phon', '$gen','$dob')";
		$result=$conn->query($sql);
		if($result)
		{
			//echo "Success";
			header("Location:applicant_list.php");
		}
		else
		{
			echo "Application failed";
		}
	}
	
?>