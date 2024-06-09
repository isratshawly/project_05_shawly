<?php
	include "header.php";
	include "dbconnect.php";

	$sql = "SELECT * FROM courses";
	$result = $conn->query($sql);
?>

<h1 align="center">Offered Courses List</h1>
<table>
	<tr>
		<th>SL</th>
		<th>Course Title</th>
		<th>Course Contents</th>
		<th>Course Teacher</th>
		<th>Duration (hours)</th>
	</tr>
	<?php
		while($row=$result->fetch_assoc()){
			
			echo "<tr>"; 
			echo "<td>".$row["id"] ."</td>";	
			echo "<td>".$row["title"] ."</td>";	
			echo "<td>". $row["content"]."</td>";	
			echo "<td>". $row["teacher"]."</td>";		
			echo "<td>". $row["duration"]."</td>";	
			echo "</tr>"; 
		}
	
	?>
			
<table>
		
<?php
	include "footer.php";
?>		


