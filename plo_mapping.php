<?php

	include "connection.php";
	   session_start();

         $id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>plo mapping</title>
</head>
<body>

	
	<form method = "post">

		<h3>Select Course ID</h3>
		<select name = "section_name" >
			<?php

				$sql= "SELECT section_name FROM section WHERE faculty_id = '$id'";
				$result = mysqli_query($conn,$sql);

				while($rows =  mysqli_fetch_assoc($result))
				{
					$section_name = $rows['section_name'];
					echo "<option value= '$section_name'>$section_name</option>"; 
				}

			?> 
		</select>
		<br>
		<h3>FOR PLO 1 </h3>
		<p><input type = "checkbox" name= "plo1[]" value= "CLO1"/> CLO1</p>
		<p><input type = "checkbox" name= "plo1[]" value= "CLO2"/> CLO2</p>
		<p><input type = "checkbox" name= "plo1[]" value= "CLO3"/> CLO3</p>
		<p><input type = "checkbox" name= "plo1[]" value= "CLO4"/> CLO4</p>
		<p><input type = "checkbox" name= "plo1[]" value= "CLO5"/> CLO5</p>
		<p><input type = "checkbox" name= "plo1[]" value= "CLO6"/> CLO6</p>
		<p></p>
		<h3>FOR PLO 2 </h3>
		<p><input type = "checkbox" name= "plo2[]" value= "CLO1"/> CLO1</p>
		<p><input type = "checkbox" name= "plo2[]" value= "CLO2"/> CLO2</p>
		<p><input type = "checkbox" name= "plo2[]" value= "CLO3"/> CLO3</p>
		<p><input type = "checkbox" name= "plo2[]" value= "CLO4"/> CLO4</p>
		<p><input type = "checkbox" name= "plo2[]" value= "CLO5"/> CLO5</p>
		<p><input type = "checkbox" name= "plo2[]" value= "CLO6"/> CLO6</p>
		<p></p>
		<h3>FOR PLO 3 </h3>
		<p><input type = "checkbox" name= "plo3[]" value= "CLO1"/> CLO1</p>
		<p><input type = "checkbox" name= "plo3[]" value= "CLO2"/> CLO2</p>
		<p><input type = "checkbox" name= "plo3[]" value= "CLO3"/> CLO3</p>
		<p><input type = "checkbox" name= "plo3[]" value= "CLO4"/> CLO4</p>
		<p><input type = "checkbox" name= "plo3[]" value= "CLO5"/> CLO5</p>
		<p><input type = "checkbox" name= "plo3[]" value= "CLO6"/> CLO6</p>
		<p></p>
		<h3>FOR PLO 4 </h3>
		<p><input type = "checkbox" name= "plo4[]" value= "CLO1"/> CLO1</p>
		<p><input type = "checkbox" name= "plo4[]" value= "CLO2"/> CLO2</p>
		<p><input type = "checkbox" name= "plo4[]" value= "CLO3"/> CLO3</p>
		<p><input type = "checkbox" name= "plo4[]" value= "CLO4"/> CLO4</p>
		<p><input type = "checkbox" name= "plo4[]" value= "CLO5"/> CLO5</p>
		<p><input type = "checkbox" name= "plo4[]" value= "CLO6"/> CLO6</p>
				<p></p>
		<h3>FOR PLO 5 </h3>
		<p><input type = "checkbox" name= "plo5[]" value= "CLO1"/> CLO1</p>
		<p><input type = "checkbox" name= "plo5[]" value= "CLO2"/> CLO2</p>
		<p><input type = "checkbox" name= "plo5[]" value= "CLO3"/> CLO3</p>
		<p><input type = "checkbox" name= "plo5[]" value= "CLO4"/> CLO4</p>
		<p><input type = "checkbox" name= "plo5[]" value= "CLO5"/> CLO5</p>
		<p><input type = "checkbox" name= "plo5[]" value= "CLO6"/> CLO6</p>
				<p></p>
		<h3>FOR PLO 6 </h3>
		<p><input type = "checkbox" name= "plo6[]" value= "CLO1"/> CLO1</p>
		<p><input type = "checkbox" name= "plo6[]" value= "CLO2"/> CLO2</p>
		<p><input type = "checkbox" name= "plo6[]" value= "CLO3"/> CLO3</p>
		<p><input type = "checkbox" name= "plo6[]" value= "CLO4"/> CLO4</p>
		<p><input type = "checkbox" name= "plo6[]" value= "CLO5"/> CLO5</p>
		<p><input type = "checkbox" name= "plo6[]" value= "CLO6"/> CLO6</p>
				<p></p>
		<h3>FOR PLO 7 </h3>
		<p><input type = "checkbox" name= "plo7[]" value= "CLO1"/> CLO1</p>
		<p><input type = "checkbox" name= "plo7[]" value= "CLO2"/> CLO2</p>
		<p><input type = "checkbox" name= "plo7[]" value= "CLO3"/> CLO3</p>
		<p><input type = "checkbox" name= "plo7[]" value= "CLO4"/> CLO4</p>
		<p><input type = "checkbox" name= "plo7[]" value= "CLO5"/> CLO5</p>
		<p><input type = "checkbox" name= "plo7[]" value= "CLO6"/> CLO6</p>
				<p></p>
		<h3>FOR PLO 8 </h3>
		<p><input type = "checkbox" name= "plo8[]" value= "CLO1"/> CLO1</p>
		<p><input type = "checkbox" name= "plo8[]" value= "CLO2"/> CLO2</p>
		<p><input type = "checkbox" name= "plo8[]" value= "CLO3"/> CLO3</p>
		<p><input type = "checkbox" name= "plo8[]" value= "CLO4"/> CLO4</p>
		<p><input type = "checkbox" name= "plo8[]" value= "CLO5"/> CLO5</p>
		<p><input type = "checkbox" name= "plo8[]" value= "CLO6"/> CLO6</p>
				<p></p>
		<h3>FOR PLO 9 </h3>
		<p><input type = "checkbox" name= "plo9[]" value= "CLO1"/> CLO1</p>
		<p><input type = "checkbox" name= "plo9[]" value= "CLO2"/> CLO2</p>
		<p><input type = "checkbox" name= "plo9[]" value= "CLO3"/> CLO3</p>
		<p><input type = "checkbox" name= "plo9[]" value= "CLO4"/> CLO4</p>
		<p><input type = "checkbox" name= "plo9[]" value= "CLO5"/> CLO5</p>
		<p><input type = "checkbox" name= "plo9[]" value= "CLO6"/> CLO6</p>
				<p></p>
		<h3>FOR PLO 10 </h3>
		<p><input type = "checkbox" name= "plo10[]" value= "CLO1"/> CLO1</p>
		<p><input type = "checkbox" name= "plo10[]" value= "CLO2"/> CLO2</p>
		<p><input type = "checkbox" name= "plo10[]" value= "CLO3"/> CLO3</p>
		<p><input type = "checkbox" name= "plo10[]" value= "CLO4"/> CLO4</p>
		<p><input type = "checkbox" name= "plo10[]" value= "CLO5"/> CLO5</p>
		<p><input type = "checkbox" name= "plo10[]" value= "CLO6"/> CLO6</p>
				<p></p>
		<h3>FOR PLO 11 </h3>
		<p><input type = "checkbox" name= "plo11[]" value= "CLO1"/> CLO1</p>
		<p><input type = "checkbox" name= "plo11[]" value= "CLO2"/> CLO2</p>
		<p><input type = "checkbox" name= "plo11[]" value= "CLO3"/> CLO3</p>
		<p><input type = "checkbox" name= "plo11[]" value= "CLO4"/> CLO4</p>
		<p><input type = "checkbox" name= "plo11[]" value= "CLO5"/> CLO5</p>
		<p><input type = "checkbox" name= "plo11[]" value= "CLO6"/> CLO6</p>
				<p></p>
		<h3>FOR PLO 12 </h3>
		<p><input type = "checkbox" name= "plo12[]" value= "CLO1"/> CLO1</p>
		<p><input type = "checkbox" name= "plo12[]" value= "CLO2"/> CLO2</p>
		<p><input type = "checkbox" name= "plo12[]" value= "CLO3"/> CLO3</p>
		<p><input type = "checkbox" name= "plo12[]" value= "CLO4"/> CLO4</p>
		<p><input type = "checkbox" name= "plo12[]" value= "CLO5"/> CLO5</p>
		<p><input type = "checkbox" name= "plo12[]" value= "CLO6"/> CLO6</p>
				<p></p>
		<h3>FOR PLO 13 </h3>
		<p><input type = "checkbox" name= "plo13[]" value= "CLO1"/> CLO1</p>
		<p><input type = "checkbox" name= "plo13[]" value= "CLO2"/> CLO2</p>
		<p><input type = "checkbox" name= "plo13[]" value= "CLO3"/> CLO3</p>
		<p><input type = "checkbox" name= "plo13[]" value= "CLO4"/> CLO4</p>
		<p><input type = "checkbox" name= "plo13[]" value= "CLO5"/> CLO5</p>
		<p><input type = "checkbox" name= "plo13[]" value= "CLO6"/> CLO6</p>

		<input type = "submit" name= "submit" value= "submit"/>
	
	<?php

		if(isset($_POST['submit'])){

			///CHECKING DATA FOR NULL VALUE 

			if(!empty($_POST['plo1']))
			{
				$plo1 = $_POST['plo1'];
				$a = implode(',',$plo1);
				$a = "'".$a."'";
			}
			else{
				$a = 'NULL';
			}
			
			if(!empty($_POST['plo2']))
			{
				$plo2 = $_POST['plo2'];
				$b = implode(',',$plo2);
				$b = "'".$b."'";
			}
			else{
				$b = 'NULL';
			}

			if(!empty($_POST['plo3']))
			{
				$plo3 = $_POST['plo3'];
				$c = implode(',',$plo3);
				$c = "'".$c."'";
			}
			else{
				$c = 'NULL';
			}
			
			if(!empty($_POST['plo4']))
			{
				$plo4 = $_POST['plo4'];
				$d = implode(',',$plo4);
				$d = "'".$d."'";
			}
			else{
				$d = 'NULL';
			}

			if(!empty($_POST['plo5']))
			{
				$plo5 = $_POST['plo5'];
				$e = implode(',',$plo5);
				$e = "'".$e."'";
			}
			else{
				$e = 'NULL';
			}
			
			if(!empty($_POST['plo6']))
			{
				$plo6 = $_POST['plo6'];
				$f = implode(',',$plo6);
				$f = "'".$f."'";
			}
			else{
				$f = 'NULL';
			}

			if(!empty($_POST['plo7']))
			{
				$plo7 = $_POST['plo7'];
				$g = implode(',',$plo7);
				$g = "'".$g."'";
			}
			else{
				$g = 'NULL';
			}
			
			if(!empty($_POST['plo8']))
			{
				$plo8 = $_POST['plo8'];
				$h = implode(',',$plo8);
				$h = "'".$h."'";
			}
			else{
				$h = 'NULL';
			}

			if(!empty($_POST['plo9']))
			{
				$plo9 = $_POST['plo9'];
				$i = implode(',',$plo9);
				$i = "'".$i."'";
			}
			else{
				$i = 'NULL';
			}
			
			if(!empty($_POST['plo10']))
			{
				$plo10 = $_POST['plo10'];
				$j = implode(',',$plo10);
				$j = "'".$j."'";
			}
			else{
				$j = 'NULL';
			}

			if(!empty($_POST['plo11']))
			{
				$plo11 = $_POST['plo11'];
				$k = implode(',',$plo11);
				$k = "'".$k."'";
			}
			else{
				$k = 'NULL';
			}
			
			if(!empty($_POST['plo12']))
			{
				$plo12 = $_POST['plo12'];
				$l = implode(',',$plo12);
				$l = "'".$l."'";
			}
			else{
				$l = 'NULL';
			}

			if(!empty($_POST['plo13']))
			{
				$plo13 = $_POST['plo13'];
				$m = implode(',',$plo13);
				$m = "'".$m."'";
			}
			else{
				$m = 'NULL';
			}
			



			$section_name = $_POST['section_name']; 

			$sql = "INSERT INTO plo_table(section_name,plo1,plo2,plo3,plo4,plo5,plo6,plo7,plo8,plo9,plo10,plo11,plo12,plo13) VALUES ('$section_name',$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m)";

			//REMOVED ' ' from VALUES to handle NULL;

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






</body>
</html>