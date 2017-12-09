<?php
include_once("dbConnection.php");
//echo "it came atleast";
if(! (isset($_POST['userName']))){
	echo "-1";
}
else{
	$username=$_POST['userName'];

	$sql=("select v.VehicleNo,v.regNo,v.Brand,v.Model from
		user u inner join
		vehicleowner vo on vo.NIC=u.NIC inner join
		vehicle v on v.OwnerID=vo.OwnerID
		where u.Username=\"$username\";");
	//echo $sql;
	$result_login = mysqli_query($connect,$sql);
	if ($result_login->num_rows>0){
		$ArrayVehicleDeatails=array();
		while($EmpDetails=mysqli_fetch_array($result_login)){
			$vehicleDetailsArray=array('vehicleNo'=>$EmpDetails['VehicleNo'], 'regNo'=>$EmpDetails['regNo'],'brand' =>$EmpDetails['Brand'],
				'model'=>$EmpDetails['Model'],'pic'=>$EmpDetails['picture']);
		array_push($ArrayVehicleDeatails,$vehicleDetailsArray);
		}
		echo json_encode($ArrayVehicleDeatails);
		
	}
	else {
		echo "invalid username??";
	}
}
?>
