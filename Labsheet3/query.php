<?php
	include 'database.php';           //include database.php file to this file
	if(isset($_POST['register'])){    //post method for the form submition
		$username = $_POST['userName'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$country = $_POST['country'];
		$zipcode = $_POST['zipCode'];
		$email = $_POST['email'];
		$gender = $_POST['sex'];
		$english = $_POST['English'];
		$nonenglish = $_POST['nonEnglish'];
		$about = $_POST['about'];
		$language= null;
		if($english && $nonenglish){        
			$language = "Both";
		}
		else{
			if($english){
				$language = "english-Only";    
			}
			else{
				$language = "non-english-only";
			}
		}


		$dbc = openDB();  //establish the connection with mysql database
        //mysql query for the inserting data to the user table 
        $query = "insert into user ( userName,password,Name,Address,Country,zip,email,sex,language,about)
                      values('$username','$password','$name','$address','$country','$zipcode','$email','$gender','$language','$about')";
        $result = mysqli_query($dbc,$query)
        or die(mysqli_error($dbc));
        echo "<div id='success'> <p>Success </p> </div> <br>";  //printing whether submission is successful or not 
        return false;
        closeDB($dbc);




	}




?>