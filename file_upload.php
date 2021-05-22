<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form method="post" enctype="multipart/form-data">
    
   
    <label>Course Outline</label>
    <input type="File" name="file1">

 <br>
 

    
   
    <label>Question Bank</label>
    <input type="File" name="file2">

 
 <br>

    
   
    <label>Marks</label>
    <input type="File" name="file3">
    <input type="submit" name="submit">
 
 
</form>
 
</body>
</html>
 
<?php 
include "connection.php";

 

 
if (isset($_POST["submit"]))
 {
     
        
     
    
     $pname1 = rand(1000,10000)."-".$_FILES["file1"]["name"];
     
     
 
    
    $tname1 = $_FILES["file1"]["tmp_name"];
    
   
     
	$uploads_dir1 = 'img';

    move_uploaded_file($tname1, $uploads_dir1.'/'.$pname1);

    $pname3 = rand(1000,10000)."-".$_FILES["file3"]["name"];
     
     
 
   
    $tname3 = $_FILES["file3"]["tmp_name"];
    
   
     
	$uploads_dir3 = 'img';
    
    move_uploaded_file($tname3, $uploads_dir3.'/'.$pname3);
 	
 	$pname2 = rand(1000,10000)."-".$_FILES["file2"]["name"];
     
     
 
    #temporary file name to store file
    $tname2 = $_FILES["file2"]["tmp_name"];
    
   
     
	$uploads_dir2 = 'img';
    
    move_uploaded_file($tname2, $uploads_dir2.'/'.$pname2);
    
    
    if(!empty($pname1))
    {
    	$sql1 = "INSERT into assessment(assessment_plan) VALUES('$pname1')";	
    }
    
    if(!empty($pname3))
    {
    	 $sql3 = "INSERT into assessment(question_bank) VALUES('$pname3')";
    	
    }
   

    if(!empty($pname2))
    {
    	  $sql2 = "INSERT into assessment(marks_obtained) VALUES('$pname2')";
    	
    }
   
    
 
    if(mysqli_query($conn,$sql1)){
 
    echo "File Sucessfully uploaded";
    }
    else if(mysqli_query($conn,$sql3))
    {
    	echo "File Sucessfully uploaded";
    }
    elseif (mysqli_query($conn,$sql2)) {
    	echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }


}


 
?>