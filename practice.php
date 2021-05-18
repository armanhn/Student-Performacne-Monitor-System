<?php
	include "connection.php";
	
	 $sql =	"SELECT DISTINCT * FROM plo_table"; 
	 $result = mysqli_query($conn,$sql);
		 
		 if(mysqli_num_rows($result)>0)
		 {
		 	
		 	$add = 0;
		 	$count= 0;
		 	$i=0;
		 	while($row = mysqli_fetch_assoc($result))
		 	{
		 		if(!empty($row['plo1']))
		 		{
		 			$count++;
		 		}

		 		$a = array($row['plo1']);
		 		$b= $row['serial_id'];
		 		$i++;
		 	}
		 	
		 	//echo $count;
		 	echo "<br>";
		 	}

		 	while($count > 0)
		 		{
		 			
		 			 $i = 0;
		 			 $ploValue = $a;
		 			 echo $ploValue;
		 			 echo "<br>";
		 			 $serialValue = $b[$i];
					
		 			 for($i=0 ; $i<6; $i++)
		 			 {
		 			 		$CLO = "CLO".$i; 
		 			 		$sql2 = "SELECT SUM(CASE WHEN $CLO IS NOT NULL THEN 1 ELSE 0 END) AS ccount
        					FROM grade_sheet AS g, plo_table AS p
        					WHERE g.serial_id = p.serial_id AND g.$CLO = 'Y' AND p.plo1 = '$ploValue' ";

				            $result2 = mysqli_query($conn,$sql2);
    
						    $row2 = mysqli_fetch_assoc($result2);

						    $value = $row2['ccount'];
						    echo $value;
						    echo "<br>";
						    $add += $value;


		 			 }
		 

						    $i++;
						    $count--;

		 		}
		 		echo"TOTAL = ";
		 		echo $add;
		 		


?>