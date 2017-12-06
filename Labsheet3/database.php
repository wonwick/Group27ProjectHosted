<?php 
$dbc = null;
function openDB() {   //establish connection with db;
    $domain = 'localhost'; 
    $username = 'root';    
    $password = 'Ieeew3';  //password for mysql db
    $db = 'labsheet3';

    $dbc = mysqli_connect($domain,$username,$password,$db)
    or die(mysqli_connect_error());
    return $dbc;
}

function closeDB($dbc){
    mysqli_close($dbc);    //close the connection with db;
}

?>