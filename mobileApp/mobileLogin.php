<?php

include_once("dbConnection.php");

if( !(isset($_POST['password']) && isset($_POST['userName'])) ){
	echo "request came but -1 ";
}
else{
	$username=$_POST['userName'];
	$password=$_POST['password'];
//$password='admin';
//$username='admin';
	$sql=("select * from user where Username=\"".$username."\" and Password=\"".$password."\";" );
	//echo $sql;
	$result_login = mysqli_query($connect,$sql);
	if ($result_login->num_rows>0){
		while($row=mysqli_fetch_array($result_login)){
			echo $row['Type'];
		}
	}
	else {
	
		echo "0";
	}
}
?>

