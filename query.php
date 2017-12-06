<html>
<?php
//connection file of database
include 'database.php';

//get values from post
$userName= $_POST["username"];
$password= $_POST["password"];
$name= $_POST["name"];
$address= $_POST["address"];
$country= $_POST["country"];
$zip= $_POST["zip"];
$email= $_POST["email"];
$sex= $_POST["sex"];
//language is set to o is not selected set to 1 if english set to 2 if nonenglish set to 3 if both
$language=$_POST["english"]+$_POST["nonEnglish"];
$about=  $_POST["about"];
//connect to database
$dbc = openDB();
    //add values to user table
    $query = "insert into user ( userName,password,Name,Address,Country,zip,email,sex,language,about)
                  values('$userName','$password','$name','$address','$country','$zip','$email','$sex','$language','$about')";
    $result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    closeDB($dbc);
?>

</html>
