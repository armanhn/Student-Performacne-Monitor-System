<?php
   include('connection.php');
   session_start();
   
       
         $id = $_SESSION['id'];
         $sql1 = "SELECT  * FROM faculty WHERE id = '$id' ";
         $result1 = mysqli_query($conn,$sql1);
         $row=$result1->fetch_array();
         
         if($row > 0 ) {
            $f_name = $row ["f_name"];
         }
   

?> 

<html>

   <head>
      <title>Welcome faculty </title>
   </head>
   
   <body>

      <h1> Welcome <?php echo $f_name; ?>  </h1> 
      <h2><a href = "plo_mapping.php">PLO Mapping</a></h2>
      <h2><a href = "logout.php">Sign Out</a></h2>
      <h2><a href = "unique_coursewise_plo.php">Course Wise Charts</a></h2>
      <h2><a href = "grade_sheet_insert.php">Enter Students Grades</a></h2>
   </body>
   
</html>