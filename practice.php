<?php
	include "connection.php"
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Demo</title>
</head>
<body>

	<form action = "" method = "post">
		<table>
			<div>
				<tr>
				<th>Enter Course ID</th>
				<td><input type = "text" name = "course_id" ></td>
				</tr>
				<tr>
				<th>Enter Sction</th>
				<td><input type = "text" name = "section" ></td>
				</tr>
				<tr>
				<th>Enter Semester</th>
				<td><input type = "text" name = "semester" ></td>	
				</tr>
				
				<tr>
				<th>Enter Year</th>
				<td><input type = "text" name = "year" ></td>
				</tr>
				<tr>
				<th>Enter Number of Students</th>
				<td><input type = "text" name = "no_of_students" ></td>
				</tr>
				<tr>
				<td></td>
				<td><input type = "submit" name = "submit" ></td>
				</tr>

				<?php


				if(isset($_POST['submit'])){
					$i=0;


					$nos = $_POST['no_of_students'];
					$course_id = $_POST['course_id'];
					$section = $_POST['section'];
					$semester = $_POST['semester'];
					$year = $_POST['year'];


					/*
					while($i<$nos)
					{
						$sql = "INSERT INTO grade_sheet_cse (course_id,section,semester,year) VALUES ('$course_id','$section','$semester','$year')"; 

						if(mysqli_query($conn,$sql)){
							echo "DONE";
						}
						else{
							echo"ERROR";
						}
						$i++;
					}
					*/

				}


				?>
				
			</div>
	

	
		</table>
	

</body>
</html>
