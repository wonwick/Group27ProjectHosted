<?php
include_once("dbConnection.php");

if(! (isset($_POST['userName']))){
	echo "-1";
}
else{
	$userName=$_POST['userName'];
	$attend=$_POST['attend'];
	$sql=("INSERT INTO `attendance`(`Username`, `attendance`) VALUES (\"$userName\",\"$attend\");");
	echo $sql;
	if ( mysqli_query($connect,$sql)){
		echo '1';
		
	}
	else {

		echo "0";
	}
}
?>
