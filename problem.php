<?php
	include "connection.php";
	
	
	$grand_total=0;
	for($i = 1; $i <=13; $i++)
	{
		$plo = "plo".$i;
	 $sql =	"SELECT DISTINCT $plo FROM plo_table"; 
	 $result = mysqli_query($conn,$sql);
		 
		 if(mysqli_num_rows($result)>0)
		 {
		 	
		 	
		 	$count= 0;
		 	$i=0;
		 	while($row = mysqli_fetch_assoc($result))
		 	{

		 		if(!empty($row['$plo'])) // counting number of row with value in plo1
		 		{
		 			$i;
		 			$count++;
		 			$value = $row['$plo'];
		 			$a[$i] = $value;
		 			$i++;
				} 
		 	}

		 }


				 $add = 0;

	 			for($i=0;$i<$count;$i++)
	 			{
	 			 $ploValue = $a[$i];
 
	 			 	for($j=1 ; $j<=6; $j++)
	 			 	{
	 			 		
	 			 		$CLO = "CLO".$j;
	 			 		if($CLO == $ploValue)
	 			 			{
	 			 		$sql2 = "SELECT SUM(CASE WHEN $CLO IS NOT NULL THEN 1 ELSE 0 END) AS ccount
						FROM grade_sheet AS g, plo_table AS p
						WHERE g.serial_id = p.serial_id AND g.$CLO = 'Y' AND p.plo1 = '$ploValue'";

			            $result2 = mysqli_query($conn,$sql2);

					    $row2 = mysqli_fetch_assoc($result2);

					    $value = $row2['ccount'];
					    echo $value;
					    echo "<br>";
					    $add += $value;
	 			 			}	



	 				}
	 			}
	 			

	 		echo"TOTAL ".$plo." = ";
	 		echo $add;
	 		$grand_total += $add;
	}

	echo "TOTAL  = ".$grand_total;

?>