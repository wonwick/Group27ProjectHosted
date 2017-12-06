<?php
$dbcon = null;
//establish db connection
function openDB() {
    $domain = 'localhost';
    $userName = 'lab3';
    $password = 'asd123';
    $db = 'lab3';

    $dbcon = mysqli_connect($domain,$userName,$password,$db)
    or die(mysqli_connect_error());
    return $dbcon;
}
//close the connection with db
function closeDB($dbc){
    mysqli_close($dbc);
}
