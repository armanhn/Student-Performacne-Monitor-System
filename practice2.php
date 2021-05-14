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
		<tr>
		<th>Enter Student ID</th>
		<td><input type = "text" name = "id" ></td>
		</tr>
		<br>
		<tr>
		<th>Enter Quiz Marks</th>
		<td><input type = "text" name = "quiz" ></td>
		</tr>
		<br>
		<tr>
		<th>Enter Mid Marks</th>
		<td><input type = "text" name = "mid" ></td>
		</tr>
		<br>
		<tr>
		<th>Enter Final Marks</th>
		<td><input type = "text" name = "final" ></td>
		</tr>
		<br>
		<tr>
		<th>Enter Attendance Marks</th>
		<td><input type = "text" name = "attendance" ></td>
		</tr>
		<br>
		<tr>
		<th>Enter Project Marks</th>
		<td><input type = "text" name = "project" ></td>
		</tr>
		<br>
		<tr>
		<th>Enter Assignment Marks</th>
		<td><input type = "text" name = "assignment" ></td>
		<br>
		</tr>
		<br>
		<td></td>
		<td><input type = "submit" name = "submit" ></td>
		</tr>

		<?php

			if(isset($_POST['submit']))
			{
				$section_name = $_POST['section_name'];
				$id = $_POST['id'];
				$quiz = $_POST['quiz'];
				$mid = $_POST['mid'];
				$final = $_POST['final'];
				$attendance = $_POST['attendance'];
				$project = $_POST['project'];
				$assignment = $_POST['assignment'];

				$sql= "INSERT INTO grade_sheet (section_name,id,quiz,mid,final,attendance,project,assignment) VALUES ('$section_name','$id','$quiz','$mid','$final','$attendance','$project','$assignment')";
				if(mysqli_query($conn,$sql))
				{
					echo"done";
				}
				else
				{
					echo"ERROR";
				}
			}
		?>

</form>

</body>

</html>