<?php
	include "connection.php"
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dropdown list</title>
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

			if(isset($_POST['submit']))
			{
				$section_name = $_POST['section_name'];
			
				$add= 0;
				
				for($i = 1; $i<=6 ;$i++)
				{
				$CLO = "CLO".$i;
				$sql = "SELECT SUM(CASE WHEN $CLO IS NOT NULL THEN 1 ELSE 0 END) AS ccount
				FROM grade_sheet AS g
				WHERE g.section_name = '$section_name' AND g.$CLO ='Y'";

				$result = mysqli_query($conn,$sql);

				$row = mysqli_fetch_assoc($result);

				$value = $row['ccount'];

				$add += $value;
				}
				echo "<br>";
				echo "Total PLO achieved: ". $add;
				$achieved =$add;

			}
		




		?>
</body>
</html>
