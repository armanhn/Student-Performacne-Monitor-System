
<?php
	include "connection.php";


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<form action = "" method = "post">
		<th>Enter Course ID</th>
		<select name = "section_name" >
			<?php

				$sql= "SELECT section_name FROM section";
				$result = mysqli_query($conn,$sql);

				while($rows =  mysqli_fetch_assoc($result))
				{
					$section_name = $rows['section_name']; 
					echo "<option value= '$section_name'>$section_name</option>"; 
				}

			?> 
		</select>
		<br>



		<td><input type = "submit" name = "submit" ></td>



<?php
		
		$sql = "SELECT SUM ( COUNT (clo1) AND COUNT (clo2) AND COUNT (clo3) AND COUNT (clo4) AND COUNT (clo5) AND COUNT (clo6))
			from grade_sheet table";

			$result = mysqli_query($conn,$sql);
			$values = mysqli_fetch_assoc($result);

			$values = mysqli_fetch_assoc($result);

			echo $values;
		/*
		if(isset($_POST['submit']))
		{

			$section_name = $_POST['section_name'];





			$sql = "SELECT SUM(CASE WHEN CLO1 IS NOT NULL THEN 1 ELSE 0 END) AS CLO1_count,SUM(CASE WHEN CLO2 IS NOT NULL THEN 1 ELSE 0 END) AS CLO2_count,SUM(CASE WHEN CLO3 IS NOT NULL THEN 1 ELSE 0 END) AS CLO3_count, SUM(CASE WHEN CLO4 IS NOT NULL THEN 1 ELSE 0 END) AS CLO4_count ,SUM(CASE WHEN CLO5 IS NOT NULL THEN 1 ELSE 0 END) AS CLO5_count, SUM(CASE WHEN CLO6 IS NOT NULL THEN 1 ELSE 0 END) AS CLO6_count FROM grade_sheet WHERE serial_id = (SELECT serial_id FROM plo_table WHERE section_name = '$section_name')";


			
		$result = mysqli_query($conn,$sql);

		$values = mysqli_fetch_assoc($result);

		$CLO1 = $values['CLO1_count'];
		$CLO2 = $values['CLO2_count'];
		$CLO3 = $values['CLO3_count'];
		$CLO4 = $values['CLO4_count'];
		$CLO5 = $values['CLO5_count'];
		$CLO6 = $values['CLO6_count'];
			
		$a = array($CLO1,$CLO2,$CLO3,$CLO4,$CLO5,$CLO6);
		$total = array_sum($a);
		echo "<br>";
		echo $total; 

		}

	*/
		
?>
</body>
</html>



