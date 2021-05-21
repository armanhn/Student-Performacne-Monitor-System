<?php
   include('connection.php');
      session_start();
   
       
         $id = $_SESSION['id'];
         $sql1 = "SELECT  * FROM dept WHERE dept_head_id = '$id' ";
         $result1 = mysqli_query($conn,$sql1);
         $row=$result1->fetch_array();
         
         if($row > 0 ) {
            $name = $row ["dept_head_name"];
 
         }

?> 

<html>

   <head>
      <title>Welcome faculty </title>
   </head>
   
   <body>

      <h1> Welcome <?php echo $name; ?>  </h1> 
      <h2><a href = "plo.php">PLO Mapping</a></h2>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>