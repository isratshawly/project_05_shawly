<?php
	include "header.php";
	include "dbconnect.php";
	
	$sql="SELECT * FROM facility";
	$result=$conn->query($sql);
	
?>
	<div class="announce">
		<h2> Announcement for application</h2>
		<p>Barisal University Research Learning Program is offering the various research related materials and tutorials by reputated teachers.</p>
		<h2>Facilities:</h2>
		<ul>
		<?php
			while($row=$result->fetch_assoc()){
				echo "<li>".$row["description"]."</li>";
			}
		?>
		</ul>
	</div>
		
<?php
	include "footer.php";
?>

