<?php

	include "connection.php";
	session_start();
	// $id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Assesment</title>
</head>
<body>
	<form action = "" method = "post">

	<th>Attach Assesment Plan</th>
	<td><input type = "file" name = "pdf" ></td>
	<br>

	<br>
	<td><input type = "submit" name = "submit" value="upload"></td>

		<?php



        if (isset($_POST['submit'])) {


        if (isset($_POST['submit'])) {
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);

          $sql="INSERT INTO assessment (assessment_plan) values('$pdf')";
          $query=mysqli_query($conn,$sql);



        }

        }



         ?>

</body>
</html>