<?php
	
	include "connection.php";
		   
	session_start();
   
	   if(isset ($_POST["login"]) ) { 
		 
		  $id = mysqli_real_escape_string($conn,$_POST['id']);
		  $password = mysqli_real_escape_string($conn,$_POST['password']); 
			$sql1 = "SELECT  * FROM faculty WHERE id = '$id' and password = '$password'";
			$result1 = mysqli_query($conn,$sql1);
			$num_row1 = mysqli_num_rows($result1);
			
			$sql2 = "SELECT  * FROM student WHERE id = '$id' and password = '$password'";
			$result2 = mysqli_query($conn,$sql2);
			$num_row2 = mysqli_num_rows($result2);
			
			if($num_row1 > 0 ) {
					$data = mysqli_fetch_array($result1);
					$_SESSION["id"] = $data["id"];
					header('Location: welcome_faculty.php');
					}

			if($num_row2 > 0) {
		
					$data = mysqli_fetch_array($result2);
					$_SESSION["id"] = $data["id"];
					header('Location: welcome_student.php');
			}
			
		}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<style>
  		#main {
  			width:500px;
  			margin: 300px auto;
			text-align: center;
  			padding: 5px;
  			border-radius: 5px;
  			border:2px solid #2c3e50;
			

  		}
		.a{
			background: url("pic5.jpeg");
			background-size: cover;
			background-position: center;
			font-family: sans-serif;
		}
  		.iublogo {
  			width: 100px;
  			text-align: center;
  			border-radius: 50%;
  		}
  		.my_form {
  			width: 450px;
  			margin: 0 auto;


  		}
  		.inputevalues{
  			width: 430px;
  			margin: 0 auto;
  			padding: 5px;

  		}
  		.login_btn{
  			margin-top: 10px;
  			background: #E77471;
			color: #fff;
			padding: 5px;	
  			width: 100px;
  			text-align: center;
  			font-size: 18px;
  			font-weight: bold;
  			margin-bottom: 20px;
  		}
  		.register_btn{
  			margin-top: 20px;
  			background-color: #3498db;
  			padding: 5px;
  			color: white;
  			width: 100px;
  			text-align: center;
  			font-size: 18px;
  			font-weight: bold;
  		}
  		.group_selection{
  			margin-top: 20px;
  			padding:2px;
  		}
  		.selection{
  			margin-top: 20px;
  			background-color: white;
  		}

	</style>

</head>
<body class = "a" >
		
	<div id="main">
	 <center>
       <h2>Sign in</h2>
       <img src="iublogo.png" class="iublogo">
     </enter>

      <form class="my_form"action="index.php" method="post">
       	<label>User ID:</label><br>
         <input type="text" class="inputevalues" name="id" id="id" placeholder="Enter Username"><br>
         <label>Password</label><br>
         <input type="password" class="inputevalues" name="password" id="password" placeholder="Type Your Password"><br>
	

          <input type="submit" class="login_btn" name="login" id="login" value="login"><br>
           

  
  
       </form>

	   
	   
	 
	</div>
	
   
	</body>
</html>