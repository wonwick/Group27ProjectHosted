<?php
include_once("dbConnection.php");

if(!isset($_POST['userName']) ) {
	echo "-1";
}
else{
	$username=$_POST['userName'];

	$sql=("select c.VehicleNO,regNO,Brand,Model,c.picture,FirstName, LastName  from user a inner join employee b on a.NIC = b.NIC inner join vehicle c on b.VehicleNo = c.VehicleNo inner join vehicleowner d on c.OwnerID = d.OwnerID  inner join person e on d.NIC = e.NIC where Username=\"$username\";");
//	echo $sql;
	$result_login = mysqli_query($connect,$sql);
	if ($result_login->num_rows>0){
		$VehicleDetails=mysqli_fetch_array($result_login);
		print_r($vehicleDetails);
		$vehicleDetailsArray=array('vehicleNO'=>$VehicleDetails['VehicleNO'], 'regNO'=>$VehicleDetails['regNO'],'brand' =>$VehicleDetails['Brand'],
		                        'model'=>$VehicleDetails['Model'],'picture' =>$VehicleDetails['picture'],'firstName' =>$VehicleDetails['FirstName'],
		                        'lastName'=>$VehicleDetails['LastName']);

		$jsonEmpDetails=json_encode($vehicleDetailsArray);
		echo $jsonEmpDetails;

	}
	else {

		echo "no match";
	}
}
?>
