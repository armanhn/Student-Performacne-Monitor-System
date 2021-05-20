<?php
   include('connection.php');
   session_start();
  
   
         $id = $_SESSION['id'];
         $sql1 = "SELECT  * FROM student WHERE id = '$id' ";
         $result1 = mysqli_query($conn,$sql1);
         $row=$result1->fetch_array();
         
         if($row > 0 ) {
            $name = $row ["student_name"];
         }
   

?>
<html">
   
   <head>
      <title>Welcome student</title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $name;?></h1> 
      <h2><a href = "unique_student_wise_chart.php">Plo Achieved Chart</a></h2>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>