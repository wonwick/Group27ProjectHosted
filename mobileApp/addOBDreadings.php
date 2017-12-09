<?php
include_once("dbConnection.php");

if(! (isset($_POST['vin']))){
	echo "-1";
}
else{
	$vin=$_POST['vin'];
	$readings=$_POST['OBDReadings'];
	$sql=("INSERT INTO `OBDReading`(`VehicleNo`, `reading`) VALUES
	(\"$vin\",\"$readings\");");
	echo $sql;
	if ( mysqli_query($connect,$sql)){
		echo '1';
		
	}
	else {

		echo "0";
	}
}
?>
