<?php session_start();

$n1=$_POST['username'];
$n2=$_POST['password'];

include_once("dbConnection.php");
//include_once("../login.php");


//mysqli_select_db("trackingsystem",$connect);

$sql=("select * from user where Username ='$n1' and Password='$n2'");
$result_login = mysqli_query($connect,$sql);

$b=0;

//$row=mysqli_fetch_array($result_login);
//echo $row['username'];

while($row=mysqli_fetch_array($result_login)){


	$n1= $row['Username'];
	$n2 = $row['Password'];
	$b++;




}
if($b!=0){
	echo "<script>";
	echo "window.location='../home.php'";
	echo "</script>";


}
else{

	echo "<script>

	alert('Invalid password or useraname');
window.location='../index.php';
    </script>";
}



?>

