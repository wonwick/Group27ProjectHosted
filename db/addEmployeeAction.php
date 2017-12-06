<?php
 include_once("dbConnection.php");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$nic=$_POST['nic'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$date=$_POST['date'];
$availability = $_POST['availability'];
$empid = $_POST['empid'];
$managerid= $_POST['managerid'];
$vehicleno= $_POST['vehicleno'];

$sql1 = "insert into Person(FirstName,LastName,NIC,AddressL1,Gender,Date) values ('$fname','$lname','$nic','$address','$gender','$date')";
$result_reg1 = mysqli_query($connect,$sql1);
$sql2 = "insert into Employee(EmpID,Availability,
VehicleNo,NIC,ManagerID) values ('$empid','$availability','$vehicleno','$nic','$managerid')";
$result_reg2 = mysqli_query($connect,$sql2);
$sql3 = "insert into PhoneNumber(Number,NIC) values ('$contact','$nic')";
$result_reg3 = mysqli_query($connect,$sql3);


if($result_reg1 && $result_reg1 && $result_reg1 ){
    echo(" successfully saved");
}
else{
    echo("failed");

}

mysqli_close($connect);
echo "<script>";
echo "window.location='../addPerson.php'";
echo "</script>";


?>
