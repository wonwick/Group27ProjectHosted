<?php
 include_once("dbConnection.php");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$nic=$_POST['nic'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$date=$_POST['date'];
$type = $_POST['type'];
$username = $_POST['username'];
$password = $_POST['password'];
$managerid= $_POST['managerid'];

$sql1 = "insert into Person(FirstName,LastName,NIC,AddressL1,Gender,Date) values ('$fname','$lname','$nic','$address','$gender','$date')";
$result_reg = mysqli_query($connect,$sql1);
$sql2 = "insert into User(Username,Password,
Type,NIC) values ('$username','$password','$type','$nic')";
$result_reg = mysqli_query($connect,$sql2);
$sql3 = "insert into Manager(ManagerID,NIC) values ('$managerid','$nic')";
$result_reg = mysqli_query($connect,$sql3);
$sql4 = "insert into PhoneNumber(Number,NIC) values ('$contact','$nic')";
$result_reg = mysqli_query($connect,$sql4);


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
