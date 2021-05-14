<?php

	include "connection.php";
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
		<h3>FOR PLO 1 </h3>
		<p><input type = "checkbox" name= "plo1[]" value= "CLO1"/> CLO1</p>
		<p><input type = "checkbox" name= "plo1[]" value= "CLO2"/> CLO2</p>
		<p><input type = "checkbox" name= "plo1[]" value= "CLO3"/> CLO3</p>
		<p><input type = "checkbox" name= "plo1[]" value= "CLO4"/> CLO4</p>
		<p><input type = "checkbox" name= "plo1[]" value= "CLO5"/> CLO5</p>
		<p><input type = "checkbox" name= "plo1[]" value= "CLO6"/> CLO6</p>
		<input type = "submit" name= "submit" value= "submit"/>
	
	<?php

		if(isset($_POST['submit'])){
			/*
			if(!empty($_POST["plo"]))
			{
				echo "<h3>You have selected the following CLO</h3>";
				foreach($_POST["plo"] as $plo){
					echo '<p>'.$plo.'<p>';
				} 
			}
			else{
				echo "please select at least one clo";
			}
			*/

			$plo1 = $_POST['plo1'];
			$a = implode(',',$plo1);
			$section_name = $_POST['section_name']; 

			$sql = "INSERT INTO plo_table(section_name,plo1) VALUES ('$section_name','$a')";

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