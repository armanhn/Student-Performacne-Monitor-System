<?php

	require "connection.php";
	//session_start();
	//$id = $_SESSION['id'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Reading from the database</title>
	
</head>
<body>

	<h3>Grade Sheet</h3>
	<div>
		<form action = "" method = "post">
		<th>Enter Course ID</th>
		<select name = "section_name" >
			<?php

				$sql= "SELECT section_name FROM section WHERE faculty_id = '4315' ";
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

		$sql =	"SELECT * FROM grade_sheet WHERE section_name = '$section_name'"; 
	 $result = mysqli_query($conn,$sql);
		 
		 if(mysqli_num_rows($result)>0)
		 {
		 	while($data = mysqli_fetch_assoc($result))
		 		{
		 			echo"<tr>";
		 			echo"<td>".$data['section_name']. "</td>" . "<br>";
		 			echo"<td>".$data['id']  ."</td>". "<br>";
		 			echo"<td>".$data['quiz']."</td>"  . "<br>";
		 			echo"<td>".$data['mid']. "</td>" . "<br>";
		 			echo"<td>".$data['final']  ."</td>". "<br>";
		 			echo"<td>".$data['attendance']."</td>"  . "<br>";
		 			echo"<td>".$data['project']. "</td>" . "<br>";
		 			echo"<td>".$data['assignment']  ."</td>". "<br>";
		 			echo"<td>".$data['total_marks']."</td>"  . "<br>";
		 			echo"<td>".$data['grade']. "</td>" . "<br>";
		 			echo"<td>".$data['CLO1']  ."</td>". "<br>";
		 			echo"<td>".$data['CLO2']."</td>"  . "<br>";
		 			echo"<td>".$data['CLO3']."</td>"  . "<br>";
		 			echo"<td>".$data['CLO4']. "</td>" . "<br>";
		 			echo"<td>".$data['CLO5']  ."</td>". "<br>";
		 			echo"<td>".$data['CLO6']."</td>"  . "<br>";
		 			echo"<br>";
		 			echo"</tr>"; 
		 			echo"<hr>";

		 		}
		 }
		
		else
		{
			echo "0 results found";
		}

	}
	
?>

</div>

</body>
</html>