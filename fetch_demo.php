<?php

	require "connection.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Reading from the database</title>
	
</head>
<body>

	<h3>Reading from the database</h3>
	<div>
	<table>
	<?php

	 $sql =	"SELECT DISTINCT * FROM student"; 
	 $result = mysqli_query($conn,$sql);
		 
		 if(mysqli_num_rows($result)>0)
		 {
		 	while($student = mysqli_fetch_assoc($result))
		 		{
		 			echo"<tr>";
		 			echo "<td>".$student['id']. "</td>" . "<br>";
		 			echo "<td>".$student['student_name']  ."</td>". "<br>";
		 			echo "<td>".$student['email']."</td>"  . "<br>";
		 			echo"<br>";
		 			echo"</tr>";
		 		}
		 }
		
		else
		{
			echo "0 results found";
		}

?>
</table>
</div>

</body>
</html>