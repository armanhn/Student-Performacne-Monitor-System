<?php
	
	include "connection.php";
		   
	session_start();
   
	   if(isset ($_POST["login"]) ) { 
		 
		  $id = mysqli_real_escape_string($conn,$_POST['id']);
		  $password = mysqli_real_escape_string($conn,$_POST['password']); 
		  $_SESSION['id'] = $id;

			$sql1 = "SELECT  * FROM faculty WHERE id = '$id' and password = '$password'";
			$result1 = mysqli_query($conn,$sql1);
			$num_row1 = mysqli_num_rows($result1);
			
			$sql2 = "SELECT  * FROM student WHERE id = '$id' and password = '$password'";
			$result2 = mysqli_query($conn,$sql2);
			$num_row2 = mysqli_num_rows($result2);

			$sql3 = "SELECT  * FROM dept WHERE dept_head_id = '$id' and password = '$password'";
            $result3 = mysqli_query($conn,$sql3);
            $num_row3 = mysqli_num_rows($result3);
			
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

			if($num_row3 > 0) {
		
					$data = mysqli_fetch_array($result3);
					$_SESSION["id"] = $data["dept_head_id"];
					header('Location: welcome_dept_head.php');
			}
			
		}
		


?>

<!DOCTYPE html>
<html>
<head>
<!-- CSS only -->


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<title>Login page</title>
	<style>
  		#main {
			box-shadow: 0 0 10px 5px grey;
			background-color: transparent;
  			width:500px;
  			margin: 110px auto;
			line-height: 40px;
			text-align: center;
  			padding: 5px;
  			border-radius: 5px;
  			border:2px;
  		}
		.a{
			background: url("lightpattern.png");
			background-size: cover;
			background-position: center;
			font-family: sans-serif;
		}
  		.iublogo {
  			width: 200px;
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
		.login_btn:hover {
			background-color: black;
			color: white;
}
  		.login_btn{
  			margin-top: 10px;
  			background: grey;
			color: #fff;
			padding: 5px;	
  			width: 100px;
  			text-align: center;
  			font-size: 18px;
  			font-weight: bold;
  			margin-bottom: 20px;
			border-radius: 20px;
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
		.lol{
			margin-left: -373px;
		}
		.lmao{
			margin-left: -390px;
		}
		.header {
  			padding: 20px;
			text-align: center;
			color: black;
			font-size: 25px;
		}
	

	</style>

</head>
		<div class="header">
  		<h1>VYKON</h1>
		</div>
<body class = "a" >
    
	

	<div id="main">
	 <center>
       <h2>Sign In</h2>
       <img src="iub_logo.png" class="iublogo">
     </enter>

      <form class="my_form" action="index.php"  method="post">
       	<div class = "lmao">
		   <label>User ID</label><br>
		   </div>
         <input type="text" class="inputevalues" name="id" id="id" placeholder="Enter Username"><br>
		 <div class = "lol">
         <label>Password</label><br>
		 </div>
         <input type="password" class="inputevalues" name="password" id="password" placeholder="Type Your Password"><br>
	

          <input type="submit" class="login_btn" name="login" id="login" value="Login"><br>

       </form>
	 </center>

	 
	</div>
	
   
	</body>
</html>

