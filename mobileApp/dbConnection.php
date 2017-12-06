<?php

$server = 'localhost';
$username = 'website';
$password = 'group27';
$db = 'trackingsystem';

$connect= mysqli_connect($server,$username,$password,$db);

if(!$connect){
    die("error".mysqli_connect_error());
}
else{
    //echo("connect successfully");
//    var_dump($connect);
}


?>
