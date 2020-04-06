<?php  

  class Booking {
  	private $db_conn;

  	public function __construct($con) {
  		$this->db_conn = $con;
  	}

  	public function postBooking($location, $servicetype, $productname, $dates, $times, $customers_id, $booking_status) {
  		try {
  				$query = $this->db_conn->prepare("INSERT INTO bookings (location, servicetype,productname,dates,times, customers_id,bookingstatus) VALUES(:location, :servicetype, :productname, :dates,:times, :customers_id, :booking_status)");
		  		$values = array('location' =>$location,
		  		                'servicetype'=>$servicetype,
		  		                 'productname' =>$productname,
		  		                  'dates' =>$dates,
		  		                  'times'=>$times,
		  		                  'customers_id' =>$customers_id,
		  		                  'booking_status'=>$booking_status );

		  		$query->execute($values);
		  		$getLastIdInserted = $this->db_conn->lastInsertId();
          return $getLastIdInserted;
  			
  		} catch (PDOException $e) {
  			return $e->getMessage();
  		}

  	}


    /*====================SELECT ============================*/

    public function getBookings($customer_id){
      try {
           $query = $this->db_conn->prepare("SELECT * FROM bookings WHERE customers_id=:customer_id");
                    $query->execute(['customer_id'=>$customer_id]);
           return $query->fetchAll(PDO::FETCH_ASSOC);
           
        } catch (PDOException $e) {
          return $e->getMessage();
        }
    }


      public function getAllBookings(){
      try {
           $query = $this->db_conn->prepare("SELECT c.firstname,c.lastname,c.email,c.phonenumber,c.gender,b.servicetype,b.id, b.location,b.dates,b.times, b.bookingstatus, b.created_at,b.productname,b.customers_id FROM bookings b 
            INNER JOIN customers c 
            ON b.customers_id = c.id 
            ");

               $query->execute();
               return $query->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
          return $e->getMessage();
        }
    }

      public function putBooking($id,$status){
        try {
        $query = $this->db_conn->prepare("Update bookings SET bookingstatus=:status  WHERE id=:id");
        $query->execute(['status'=>$status,'id' =>$id]);
        return $query->rowCount();
        } catch (PDOException $e) {
          return $e->getMessage();
        }
    }




  }

  /*require "../config.php";
$db = new Database();

$book = new Booking($db->connect());
echo $book->postBooking("Accra", "indoor", 'deluxe', '2019-20-10', '16:00','6','pending');*/