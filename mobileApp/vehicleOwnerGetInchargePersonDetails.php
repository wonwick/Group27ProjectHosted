<?php
include_once("dbConnection.php");

if(! (isset($_POST['vehicleNo']))){
	echo "-1";
}
else{
	$vehicleNo=$_POST['vehicleNo'];

	$sql=("select u2.UserName, p.firstName, p.lastName from
		employee e  inner join
		user u2 on u2.NIC=e.NIC inner join
		person p on p.NIC=u2.NIC
		where e.VehicleNo=\"$vehicleNo\";");
	//echo $sql;
	$result_login = mysqli_query($connect,$sql);
	if ($result_login->num_rows>0){
		$EmpDetails=mysqli_fetch_array($result_login);
		//print_r($EmpDetails);
		$empDetailsArray=array('userName'=>$EmpDetails['UserName'], 'firstName'=>$EmpDetails['firstName'],'lastName' =>$EmpDetails['lastName']);
		$jsonEmpDetails=json_encode($empDetailsArray);
		echo $jsonEmpDetails;
		
	}
	else {

		echo "noAllocation";
	}
}
?>
