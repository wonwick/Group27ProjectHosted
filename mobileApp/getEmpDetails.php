<?php
include_once("dbConnection.php");

if(! (isset($_POST['userName']))){
	echo "-1";
}
else{
	$username=$_POST['userName'];

	$sql=("select a.NIC, FirstName, LastName, picture, addressL1, Gender, Availability, ManagerId, Number  from person a inner join employee b on a.NIC = b.NIC inner join phonenumber c on b.NIC = c.NIC inner join user d on c.NIC = d.NIC where username=\"$username\";" );
	//echo $sql;
	$result_login = mysqli_query($connect,$sql);
	if ($result_login->num_rows>0){
		$EmpDetails=mysqli_fetch_array($result_login);
		$empDetailsArray=array('NIC'=>$EmpDetails['NIC'], 'firstName'=>$EmpDetails['FirstName'],'lastName' =>$EmpDetails['LastName'],
			'picture'=>$EmpDetails['picture'],'address' =>$EmpDetails['addressL1'],'gender' =>$EmpDetails['Gender'], 
			'availability'=>$EmpDetails['Availability'],'managerID'=>$EmpDetails['ManagerId'], 'number' =>$EmpDetails['Number']); 

		$jsonEmpDetails=json_encode($empDetailsArray);
		echo $jsonEmpDetails;
		
	}
	else {

		echo "invalid username??";
	}
}
?>
