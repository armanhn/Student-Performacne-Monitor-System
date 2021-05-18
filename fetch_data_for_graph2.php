<?php
	
	include "connection.php";
	/*
	$sql = "SELECT SUM(CASE WHEN CLO1 IS NOT NULL THEN 1 ELSE 0 END) AS ccount
        FROM grade_sheet AS g, plo_table AS p
        WHERE g.serial_id=p.serial_id AND g.CLO1='Y'
        UNION 
        SELECT SUM(CASE WHEN CLO2 IS NOT NULL THEN 1 ELSE 0 END) AS cccount
        FROM grade_sheet AS g, plo_table AS p
        WHERE g.serial_id=p.serial_id AND g.CLO2='Y'";

	*/

     $sql = "SELECT SUM (SELECT SUM(CASE WHEN CLO1 IS NOT NULL THEN 1 ELSE 0 END) AS ccount
        FROM grade_sheet AS g, plo_table AS p
        WHERE g.serial_id=p.serial_id AND g.CLO1='Y'
        UNION 
        SELECT SUM(CASE WHEN CLO2 IS NOT NULL THEN 1 ELSE 0 END) AS cccount
        FROM grade_sheet AS g, plo_table AS p
        WHERE g.serial_id=p.serial_id AND g.CLO2='Y') as total
		FROM grade_sheet as g, plo_table as p";

	$result  = mysqli_query($conn,$sql);

	$row=$result->fetch_array();
	
	//$values = mysqli_fetch_assoc($result);
	

	//$values = $values['total'];

	echo $row['total'];
?>

