<?php
	
	$db = new Database();
	$customer_file = new CustomerFile($db->connect());
	
 if(isset($_POST['upload_files'])){
  $booking_id = $_POST['get_booking_id'];
  $user_id = $_POST["get_users_id"];
  $customer_id = $_POST["get_customers_id"];
  $update_success = 0;

  
		 
		$fileName = $_FILES['customerFiles']['name'];
		$fileSize = $_FILES['customerFiles']['size'];
		$fileError = $_FILES['customerFiles']['error'];
		$fileType = $_FILES['customerFiles']['type'];
		$fileTemp = $_FILES['customerFiles']['tmp_name'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
	    
		$allowed = array('jpeg','jpg','png');

		if (in_array($fileActualExt, $allowed)) {
		
		if ($fileError == 0) {
			

			if ($fileSize < 5e8) {
				
				//create a rand number and concate to give a unique name to file
				$fileNameNew = md5(time()) . "." . $fileActualExt;
				
				$fileDestination = '../uploaded_images/'.$fileNameNew;
				//$result .= $fileNameNew . '\t';
                $update_success = $customer_file->postCustomerFile($booking_id, $user_id,$customer_id, $fileDestination);
							                  
              //check update success
               if($update_success > 0){

                  	move_uploaded_file($fileTemp, $fileDestination);
  	
               }
           }
          }
      }
}

if(isset($_POST['upload_video_files'])){
  $booking_id = $_POST['get_booking_id'];
  $user_id = $_POST["get_users_id"];
  $customer_id = $_POST["get_customers_id"];
  $update_success = 0;

  
		 
		$fileName = $_FILES['customerFiles']['name'];
		$fileSize = $_FILES['customerFiles']['size'];
		$fileError = $_FILES['customerFiles']['error'];
		$fileType = $_FILES['customerFiles']['type'];
		$fileTemp = $_FILES['customerFiles']['tmp_name'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
	    
		$allowed = array('mp4');

		if (in_array($fileActualExt, $allowed)) {
		
		if ($fileError == 0) {
			
				
				//create a rand number and concate to give a unique name to file
				$fileNameNew = md5(time()) . "." . $fileActualExt;
				
				$fileDestination = '../uploaded_videos/'.$fileNameNew;
				//$result .= $fileNameNew . '\t';
                $update_success = $customer_file->postCustomerFile($booking_id, $user_id,$customer_id, $fileDestination);
							                  
              //check update success
               if($update_success > 0){

                  	move_uploaded_file($fileTemp, $fileDestination);
  	
               }
       
          }
      }
}

	//delete inserted image
	if(isset($_GET["rm"])){
		$customer_file->deleteCustomerImage(htmlentities($_GET["rm"]));
		unlink($_GET["file_name"]);
		header("Location:../core_module_users/bookings.php");
	}
?>