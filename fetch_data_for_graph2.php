<?php
	
	include "connection.php";
	$add= 0;
	for($i = 1; $i<=6 ;$i++)
	{
	$CLO = "CLO".$i;
	$sql = "SELECT SUM(CASE WHEN $CLO IS NOT NULL THEN 1 ELSE 0 END) AS ccount
    FROM grade_sheet AS g, plo_table AS p
    WHERE g.serial_id=p.serial_id AND g.$CLO ='Y'";

    $result = mysqli_query($conn,$sql);
    
    $row = mysqli_fetch_assoc($result);

    $value = $row['ccount'];

    $add += $value;
	}
	echo "<br>";
	echo "Total PLO achieved: ". $add;
	$achieved =$add;

	$add= 0;
	$value=0; 
	for($i = 1; $i<=6 ;$i++)
	{
	$CLO = "CLO".$i;
	$sql2 = "SELECT SUM(CASE WHEN $CLO IS NOT NULL THEN 1 ELSE 0 END) AS cccount
    FROM grade_sheet AS g, plo_table AS p
    WHERE g.serial_id=p.serial_id ";

    $result2 = mysqli_query($conn,$sql2);
    
    $row = mysqli_fetch_assoc($result2);

    $value = $row['cccount'];

    $add += $value;
	}
	echo "<br>";
	echo "Total PLO: ". $add;
	 $total = $add;
	 $percentage = ($achieved/$total) * 100 ."%";
	 echo "<br>";
	 echo $percentage; 
?>

