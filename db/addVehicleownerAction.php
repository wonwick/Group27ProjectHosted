<?php
 include_once("dbConnection.php");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$nic=$_POST['nic'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$date=$_POST['date'];
$ownerid = $_POST['ownerid'];


$sql1 = "insert into Person(FirstName,LastName,NIC,AddressL1,Gender,Date) values ('$fname','$lname','$nic','$address','$gender','$date')";
$result_reg = mysqli_query($connect,$sql1);
$sql2 = "insert into VehicleOwner(OwnerID,NIC) values ('$ownerid','$nic')";
$result_reg = mysqli_query($connect,$sql2);
$sql3 = "insert into PhoneNumber(Number,NIC) values ('$contact','$nic')";
$result_reg = mysqli_query($connect,$sql3);


if($result_reg){
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
