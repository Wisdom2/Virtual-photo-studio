<?php	
	$db = new Database();
	$transaction = new Transaction($db->connect());
	
	if(isset($_GET['id'],$_GET['status'],$_GET['user'])){
		$response = 0;
		$response = $transaction->putBooking(htmlentities($_GET['id']),htmlentities($_GET['status']), $_GET['user']);
	}