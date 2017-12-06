<?php
include_once("dbConnection.php");

if(! (isset($_POST['userName']))){
	echo "-1";
}
else{
	$userName=$_POST['userName'];
	$timeStamp=$_POST['timeStamp'];
	$tripNo=$_POST['tripNo'];
	$lon=$_POST['lon'];
	$lat=$_POST['lat'];
	$sql=("INSERT INTO `location`(`userName`, `TimeStamp`, `tripNo`, `Longtitude`, `Langtitude`) VALUES
	(\"$userName\",\"$timeStamp\",$tripNo,$lon,$lat);");
	echo $sql;
	if ( mysqli_query($connect,$sql)){
		echo '1';
		
	}
	else {

		echo "0";
	}
}
?>
