<?php

	$db = new Database();
	$user = new User($db->connect());
	$user_role = new UserRole($db->connect());

	if(session_status() == PHP_SESSION_NONE){
		session_start();
	}

	if(isset($_POST["signup"])) {

		$response      =array();
		$firstName     = htmlentities($_POST["user_fname"]);
		$lastName      = htmlentities($_POST["user_lname"]);
		$gender        = htmlentities($_POST["user_gender"]);
		$email         = htmlentities($_POST["user_email"]);
		$password      = htmlentities($_POST["user_password"]);
		$contactNumber = htmlentities($_POST["user_phonenumber"]);
		$role_id = htmlentities($_POST["user_role"]);
        $user_confirm_password = $_POST["user_confirm_password"];
        
        if($password != $user_confirm_password){
          echo "<script>alert('Password mismatch');</script>";
        }
		$response = $user->registerUser($firstName,$lastName,$gender,$email,$password,$contactNumber);
					
		if($response <= 0){
			echo "<script>alert('User not registered');</script>";
		}else{
			$user_role->PostRole($response, $role_id);
			echo "<script>alert('User successfully registered');</script>";
		}
	}

	else if(isset($_POST["update_user_btn"])) {

		$response      = array();

		$firstName     = htmlentities($_POST["user_fname"]);
		$lastName      = htmlentities($_POST["user_lname"]);
		$gender        = htmlentities($_POST["user_gender"]);
		$email         = htmlentities($_POST["user_email"]);
		$phoneNumber = htmlentities($_POST["user_phonenumber"]);
		
		$response = $user->putUser($firstName,$lastName,$gender,$email,$phoneNumber);

		if(array($response) <= 0){
			echo "<script>alert('Profile not Updated);</script>";
		}else{
			echo "<script>alert('Profile successfully updated');</script>";
		}
	}

	else if(isset($_POST["update_user_btn"])) {
		$password              = htmlentities($_POST["update_password"]);
		$confirm_password      = htmlentities($_POST["retype_password"]);
		//$email                 = htmlentities($_POST["retype_password"]); to be changed
		$email                 = htmlentities("dominic@outlook.com");

		if(($password == $confirm_password)  && !empty($confirm_password) && !empty($password )) {

			$response =  $user->putUserPassword($password,$email);

			if(array($response) <= 0){
				echo "<script>alert('Profile not Updated);</script>";
			}else{
				echo "<script>alert('Profile successfully updated');</script>";
			}
		}else{
			echo "<script>alert('Password mismatch/empty');</script>";
		}

		
	}

	else if(isset($_POST["login_submit"])) {
		$email   = htmlentities($_POST["login_email"]);
		$password  = htmlentities($_POST["login_password"]);

		
		$response = $user->loginUser($email,$password);
		if($response > 0) {
			$_SESSION["user_email"] = $email;
			
		}
	}