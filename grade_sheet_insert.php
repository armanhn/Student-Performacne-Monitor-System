<?php
	include "connection.php";
	   session_start();

       $id = $_SESSION['id'];
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

				$sql= "SELECT section_name FROM section WHERE faculty_id = '$id' ";
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
		<tr>
		<th>Enter Grade</th>
		<td><input type = "text" name = "grade" ></td>
		</tr>
		<tr>
		<br>
		<tr>
		<th>Enter CLO1</th>
		<td><input type = "text" name = "CLO1" ></td>
		</tr>
		<br>
		<tr>
		<th>Enter CLO2</th>
		<td><input type = "text" name = "CLO2" ></td>
		</tr>
		<br>
		<tr>
		<th>Enter CLO3</th>
		<td><input type = "text" name = "CLO3" ></td>
		</tr>
		<br>
		<tr>
		<th>Enter CLO4</th>
		<td><input type = "text" name = "CLO4" ></td>
		</tr>
		<br>
		<tr>
		<th>Enter CLO5</th>
		<td><input type = "text" name = "CLO5" ></td>
		</tr>
		<br>
		<tr>
		<th>Enter CLO6</th>
		<td><input type = "text" name = "CLO6" ></td>
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
				$grade = $_POST['grade'];
				$CLO1 = $_POST['CLO1'];
				$CLO2 = $_POST['CLO2'];
				$CLO3 = $_POST['CLO3'];
				$CLO4 = $_POST['CLO4'];
				$CLO5 = $_POST['CLO5'];
				$CLO6 = $_POST['CLO6'];
				
				$marks = array($quiz,$mid,$final,$attendance,$project,$assignment);

				$total_marks = array_sum($marks);
				
				

				if(!empty($quiz))
				{	
					$quiz = "'".$quiz."'";
				}
				else{
					$quiz = 'NULL';
				}

				// TO CHECK if the value is inserted or not, if not entered then INSERT NULL

				if(!empty($mid))
				{	
					$mid = "'".$mid."'";
				}
				else{
					$mid = 'NULL';
				}

				// TO CHECK if the value is inserted or not, if not entered then INSERT NULL


				if(!empty($final))
				{	
					$final = "'".$final."'";
				}
				else{
					$final = 'NULL';
				}
				
				// TO CHECK if the value is inserted or not, if not entered then INSERT NULL


				if(!empty($attendance))
				{	
					$attendance = "'".$attendance."'";
				}
				else{
					$attendance = 'NULL';
				}

				if(!empty($project))
				{	
					$project = "'".$project."'";
				}
				else{
					$project = 'NULL';
				}

				if(!empty($assignment))
				{	
					$assignment = "'".$assignment."'";
				}
				else{
					$assignment = 'NULL';
				}
				
				if(!empty($CLO1))
				{	
					$CLO1 = "'".$CLO1."'";
				}
				else{
					$CLO1 = 'NULL';
				}

				if(!empty($CLO2))
				{	
					$CLO2 = "'".$CLO2."'";
				}
				else{
					$CLO2 = 'NULL';
				}

				if(!empty($CLO3))
				{	
					$CLO3 = "'".$CLO3."'";
				}
				else{
					$CLO3 = 'NULL';
				}

				if(!empty($CLO4))
				{	
					$CLO4 = "'".$CLO4."'";
				}
				else{
					$CLO4 = 'NULL';
				}

				if(!empty($CLO5))
				{	
					$CLO5 = "'".$CLO5."'";
				}
				else{
					$CLO5 = 'NULL';
				}

				if(!empty($CLO6))
				{	
					$CLO6 = "'".$CLO6."'";
				}
				else{
					$CLO6 = 'NULL';
				}


				$sql= "INSERT INTO grade_sheet (section_name,serial_id,id,quiz,mid,final,attendance,project,assignment,total_marks,grade,CLO1,CLO2,CLO3,CLO4,CLO5,CLO6) VALUES ('$section_name',(SELECT serial_id FROM plo_table WHERE section_name = '$section_name'),'$id',$quiz,$mid,$final,$attendance,$project,$assignment,'$total_marks','$grade',$CLO1,$CLO2,$CLO3,$CLO4,$CLO5, $CLO6 )" ;

				// REMOVED '' from VALUES to handle NULL entry;

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