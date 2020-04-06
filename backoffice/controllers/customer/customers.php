<?php	
	$db = new Database();
	$customer = new Customer($db->connect());
	if(session_status() == PHP_SESSION_NONE){
		session_start();
	}

	if(isset($_POST["signup_submit"])) {
		$firstName = $_POST["sfname"];
		$lastName = $_POST["slname"];
		$dateOfBirth = $_POST["sdob"];
		$gender = $_POST["sgender"];
		$phoneNumber = $_POST["sphonenumber"];
		$email = $_POST["semail"];
		$password = $_POST["spassword"];

		$response = array();

		$response = $customer->registerCustomer($firstName,$lastName,$gender,$dateOfBirth,$email,$password,$phoneNumber);

		//echo $result = $insertedId > 0 ? "Login successfully" : "Data not saved";
		if(array($response) < 0) {
			echo "Something went wrong";
		}else{
				
    	 $_SESSION["customer_email"] = $email;
	    }

	}

	elseif (isset($_POST["login"])) {
		$email = $_POST["email"];
		$password = $_POST["password"];

		$response = 0;
		$response = $customer->loginCustomer($email,$password);

		if($response <= 0) {
			echo "user not found";
		}else{
				
    	 $_SESSION["customer_email"] = $email;
	    }
	}

	elseif (isset($_POST["btn_msg_enquiry"])) {
		$name = $_POST["name"];
		$msg_email = $_POST["msg_email"];
		$msg = $_POST["msg"];
		if(filter_var($msg_email, FILTER_VALIDATE_EMAIL)){
			$response = $customer->customerInquiry(ucfirst($name), strtolower($msg_email), $msg);
			if($response <= 0) {
				echo "Not saved";
			}else{
			   echo	$response;
		    }
		}
		
	}

	elseif (isset($_POST["update_submit_details"])) {
		$firstName = $_POST["fname"];
		$lastName = $_POST["lname"];
		$dateOfBirth = $_POST["dob"];
		$gender = $_POST["gender"];
		$phoneNumber = $_POST["phone_number"];
		$email = $_SESSION["email"];
		
		$response = $customer->putCustomer($firstName, $lastName, $gender, $dateOfBirth, $email, $phoneNumber);
		if(array($response) < 0) {
			echo "Data not updated";
		}else{
				
    	 $_SESSION["email"] = $email;
	    }
	}

	elseif (isset($_POST["btn_update_password"])) {
		
		$password = $_POST["update_password"];
		$email = $_SESSION["email"];
		$response = $customer->putCustomerPassword($password, $email);

		if($response > 0 ) {
			echo "Password updated successfully";
		}else{
		   echo	"Password not changed";
	    }
	}else if(isset($_POST['customer_review'])) {
		$customer_id = htmlentities($_POST['customer_id']);
		$review_msg = htmlentities($_POST['review']);
		$customer->customerReview($customer_id, $review_msg);
	}
