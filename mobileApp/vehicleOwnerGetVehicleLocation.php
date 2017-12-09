<?php
include_once("dbConnection.php");

if(! (isset($_POST['empUserName']))){
	echo "-1";
}
else{
	$empUserName=$_POST['empUserName'];

	$sql=("select t.timeStamp, t.Longtitude,t.Langtitude
		from location t
		inner join (
			    select userName, max(timeStamp) as MaxDate
			        from location
				    where userName=\"$empUserName\"
			    ) tm on t.userName = tm.userName and t.timeStamp = tm.MaxDate;" );
	//echo $sql;
	$result_login = mysqli_query($connect,$sql);
	if ($result_login->num_rows>0){
		$EmpDetails=mysqli_fetch_array($result_login);
		$empDetailsArray=array('timeStamp'=>$EmpDetails['timeStamp'], 'lon'=>$EmpDetails['Longtitude'],'lat' =>$EmpDetails['Langtitude']);
		$jsonEmpDetails=json_encode($empDetailsArray);
		echo $jsonEmpDetails;
		
	}
	else {

		echo "invalid username??";
	}
}
?>
