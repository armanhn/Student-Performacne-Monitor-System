<?php

	include "connection.php";
	session_start();
	 $id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Assesment</title>
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

	<th>Attach Assesment Plan</th>
	<td><input type = "file" name = "assesment_plan" ></td>
	<br>
	<th>Attach Question Bank</th>
	<td><input type = "file" name = "question_bank" ></td>
	<br>
	<th>Attach Grade Sheet</th>
	<td><input type = "file" name = "grade_sheet" ></td>
	<br>
	<td><input type = "submit" name = "submit" required></td>

		<?php


	if(isset($_POST['submit'])){

		$section_name = $_POST['section_name'];
		$assesment_plan = $_POST['assesment_plan'];
		$question_bank = $_POST['question_bank'];
		$grade_sheet = $_POST['grade_sheet'];
		

		$sql = "INSERT INTO student (section_name,faculty_id,assesment_plan,question_bank,grade_sheet) VALUES ('$section_name','$id','$assesment_plan','$question_bank','$grade_sheet')"; 

		if(mysqli_query($conn,$sql)){
			echo "DONE";
		}
		else{
			echo"ERROR";
		}
	}


	?>

</body>
</html>