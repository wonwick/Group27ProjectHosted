<?php
 include_once("dbConnection.php");

$ownerid=$_POST['ownerid'];
$brand=$_POST['brand'];
$model=$_POST['model'];
$vehicleno= $_POST['vehicleno'];


$sql2 = "insert into Vehicle(VehicleNo,Brand,
Model,OwnerID) values ('$vehicleno','$brand','$model','$ownerid')";
$result_reg2 = mysqli_query($connect,$sql2);



// if($result_reg2 ){
//     echo(" successfully saved");
// }
// else{
//     echo("failed");
//
// }

mysqli_close($connect);
echo "<script>";
echo "window.location='../addPerson.php'";
echo "</script>";


?>
