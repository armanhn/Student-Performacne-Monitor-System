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
				<th>ENTER COURSE ID</th>
				<td><input type = "text" name = "course_id" required></td>
				</tr>
				<tr>
				<th>ENTER SECTION</th>
				<td><input type = "text" name = "section" required></td>
				</tr>
				<tr>
				<th>ENTER SEMESTER</th>
				<td><input type = "text" name = "semester" required></td>	
				</tr>
				
				<tr>
				<th>ENTER YEAR</th>
				<td><input type = "text" name = "year" required></td>
				</tr>
				<tr>
				<tr>
				<th>ENTER NUMBER of STUDENTS</th>
				<td><input type = "text" name = "no_of_students" required></td>
				</tr>
				<tr>
				<td></td>
				<td><input type = "submit" name = "submit" required></td>
				</tr>

				<?php


				if(isset($_POST['submit'])){
					$nos=0;
					$i=0;
					$course_id = $_POST['course_id'];
					$section = $_POST['section'];
					$semester = $_POST['semester'];
					$year = $_POST['year'];
					$nos = $_POST['no_of_students'];
					

					$sql = "INSERT INTO grade_sheet_cse (serial_id,course_id,section,semester,year,id) VALUES ('2',$course_id','$section','$semester','$year')";

					if(mysqli_query($conn,$sql)){
						echo "DONE";
					}
					else{
						echo"ERROR";
					}

					/*while($i<$nos){

					$sql="happy";
					echo "done";
					//mysqli_close();
					$i++;
					*/
					}
					 


				?>
				
			</div>
		</table>


</body>
</html>