<?php 
        session_start();
		$username="";
        $phonenumber="";
        $address="";
        $url="";
        $encode_value ="";
        $person_id="";
        $errors = array();
		function filter_user_data($str){
			$data = htmlentities($str);
			$data = trim($str);
			$data = filter_var($str, FILTER_SANITIZE_STRING);
			return $data;
		} 
        //connet the database

		$db=mysqli_connect('localhost', 'root', '', 'registration');


        //if the register button is clicked
		if (isset($_POST['register'])) {
			// user form input in their form
			
 			$username = filter_user_data($_POST['username']);
			$phonenumber = filter_user_data($_POST['phonenumber']);
			$address = filter_user_data($_POST['address']);
			$url = filter_user_data($_POST['url']);
			$registered = 0;
			$status = 1;
 
			//ensure that form is filled properly
			if (empty($username)) {
			    array_push($errors,"Username is required!"); //add error to errors array
			}
            if (empty($url)) {
			    array_push($errors,"Video URL is required!"); //add error to errors array
			}
			if (count($errors) == 0) {
				//$password=md5($password_1); // encrypting password before save to db
				$sql="INSERT INTO user(username, phonenumber, address, url, registered, status ) VALUES ('$username', '$phonenumber', '$address', '$url','$registered', '$status')";
				mysqli_query( $db , $sql);

			        /*
                    When need to redirect after registration
			            $_SESSION['username'] = $username;
							$_SESSION['success']= "You are Registered now!" ;
							header('location:index.php'); //redirect to home page
			       */
			}
			

		}

	 
     
?>

