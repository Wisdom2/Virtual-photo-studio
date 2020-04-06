<?php  

  class CustomerFile {
  	private $db_conn;

  	public function __construct($con) {
  		$this->db_conn = $con;
  	}

  	public function postCustomerFile($bookings_id, $users_id,$customers_id, $file_path) {
  		try {
  				$query = $this->db_conn->prepare("INSERT INTO customers_files(bookings_id,users_id,customers_id,file_path) VALUES(:booking_id, :user_id,:customers_id,:file_path)");
		  		$values = array('booking_id'=>$bookings_id,'user_id'=>$users_id,'customers_id'=>$customers_id,'file_path'=>$file_path);

		  		$query->execute($values);
		  		return $query->rowCount();
  			
  		} catch (PDOException $e) {
  			return $e->getMessage();
  		}
        
  	}

    public function getCustomerImages(){
    
    try {
         $query = $this->db_conn->query("SELECT file_path,id FROM customers_files");
                  
         return $query->fetchAll(PDO::FETCH_ASSOC);
         
      } catch (PDOException $e) {
        return $e->getMessage();
      }
    }

    public function getCustomerBookingImage($booking_id){
    
    try {
         $query = $this->db_conn->prepare("SELECT file_path FROM customers_files WHERE bookings_id = :booking_id");
                 $query->execute(['booking_id'=>$booking_id]);
                 return $query->fetchAll(PDO::FETCH_ASSOC);
         
      } catch (PDOException $e) {
        return $e->getMessage();
      }
    }

     public function deleteCustomerImage($image_id){
    
    try {
         $query = $this->db_conn->prepare("DELETE FROM customers_files WHERE id = :image_id");
                 $query->execute(['image_id'=>$image_id]);
                         
      } catch (PDOException $e) {
        return $e->getMessage();
      }
    }
  }
