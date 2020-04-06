<?php
		
	$db = new Database();
	$booking = new Booking($db->connect());

	$transaction = new Transaction($db->connect());

	//$customer_file = new CustomerFile($db->connect());
	//session_start();


	if(isset($_GET["bookingstatus"],$_GET["booking_id"]) ) {

		$response = 0;
		$response = $booking->putBooking($_GET["booking_id"],$_GET["bookingstatus"]);
		
	}

	if(isset($_POST["booking_session"])) {
		$package = htmlentities($_POST["package"]);
		$booking_date = htmlentities($_POST["booking_date"]);
		$booking_time = htmlentities($_POST["booking_time"]);
		$service_type = htmlentities($_POST["service_type"]);
		$location = htmlentities($_POST["location"]);
		$booking_status = "pending";
		$customer_id = $_POST["customer_id"];
		$payment_option = $_POST["payment_option"];
		$transaction_code = htmlentities($_POST["transaction_code"]);
		$amount = htmlentities($_POST["amount"]);
		$email = "-";
		$approveby = '6';
		if(!empty(trim($package)) && !empty($booking_date) && !empty($booking_time) && !empty($service_type) ) {
			
			if($payment_option == "momo" || $payment_option == "vodacash") {
				
				$response = array();

				if(!empty(trim($transaction_code))) {
					$booking_response_id = $booking->postBooking($location, $service_type, $package, $booking_date, $booking_time, $customer_id, $booking_status);

					if(array($booking_response_id)) {
						
						$transaction_response = $transaction->postTransaction($booking_response_id, $payment_option, $email, $transaction_code,$approveby, $amount, $booking_status, $customer_id);
						echo "<script>alert('Successfully Booked you will be contacted shortly, Thank you')</script>";
					}
				}
			}

			$response = $booking->postBooking($location, $service_type, $package, $booking_date, $booking_time, $customer_id, $booking_status);

		}
	}

