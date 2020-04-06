<?php
  class Transaction {
  	private $db_conn;
  	public function __construct($con) {
  		$this->db_conn = $con;
  	}

  	public function postTransaction($booking_id, $payment_type, $email, $transaction_code, $approvedby, $amount, $status, $customers_id) {

  		try {
  			$query = $this->db_conn->prepare("INSERT INTO transactions(bookings_id,payment_type,email,transaction_code,approvedby,amount,status,customers_id) VALUES(:booking_id, :payment_type, :email, :transaction_code, :approvedby, :amount, :status, :customers_id)");
  		   $values = array('booking_id'=>$booking_id,'payment_type'=>$payment_type,'email'=>$email,'transaction_code'=>$transaction_code,'approvedby'=>$approvedby,'amount'=>$amount,'status'=>$status, 'customers_id'=>$customers_id);
  		   
  		   $query->execute($values);
  		  return $query->rowCount();

  		} catch (PDOException $e) {
  			return $e->getMessage();
  		}
  	}

    public function getTransaction($customer_id) {

      try {
        $query = $this->db_conn->prepare("SELECT t.bookings_id, t.payment_type,t.transaction_code,t.amount,t.status,t.created_at,u.firstname,u.lastname FROM transactions t JOIN users u ON 
          t.approvedby = u.id
          WHERE t.customers_id =:customer_id");
        $query->execute(['customer_id'=>$customer_id]);
        
        return $query->fetchAll(PDO::FETCH_ASSOC);

      } catch (PDOException $e) {
        return $e->getMessage();
      }
    }

     public function getTransactions() {

      try {
        $query = $this->db_conn->prepare("SELECT t.bookings_id,t.customers_id,t.payment_type,t.email,t.transaction_code,t.approvedby,t.amount,t.status,t.id, t.created_at, u.firstname,u.lastname FROM transactions t INNER JOIN customers c ON t.customers_id = c.id
         INNER JOIN bookings b ON t.bookings_id = b.id
         JOIN users u ON t.approvedby=u.id");
        
        $query->execute();
        
        return $query->fetchAll(PDO::FETCH_ASSOC);

      } catch (PDOException $e) {
        return $e->getMessage();
      }
    }

    public function getTransactionByDate($start_date,$end_date) {

      try {
        $query = $this->db_conn->prepare("SELECT t.bookings_id,t.customers_id,t.payment_type,t.email,t.transaction_code,t.approvedby,t.amount,t.status,t.id, t.created_at FROM transactions t INNER JOIN customers c ON t.customers_id = c.id
         INNER JOIN bookings b ON t.bookings_id = b.id
         WHERE t.created_at BETWEEN CAST(:start_date AS Date) AND CAST(:end_date AS Date)");
        
        $query->execute(['start_date'=>$start_date, 'end_date'=>$end_date]);
        
        return $query->fetchAll(PDO::FETCH_ASSOC);

      } catch (PDOException $e) {
        return $e->getMessage();
      }
    }


     public function TotalTransactions() {

      try {
        $query = $this->db_conn->query("SELECT sum(amount) from transactions");
                
        return $query->fetchColumn();
        

      } catch (PDOException $e) {
        return $e->getMessage();
      }
    }

      public function putBooking($id,$status,$user){
        try {
        $query = $this->db_conn->prepare("Update transactions SET status=:status,approvedby=:user  WHERE id=:id");
        $query->execute(['status'=>$status,'id' =>$id,'user'=>$user]);
        return $query->rowCount();
        } catch (PDOException $e) {
          return $e->getMessage();
        }
    }

  }

  /*require "../config.php";
	$db = new Database();
	$transaction = new Transaction($db->connect());
 var_dump($transaction->getTransactionByDate('2019-01-20','2019-05-30'));*/
	//var_dump($customer->loginCustomer("mymail@domain.com","1234")) ;
	//echo $customer->customerInquiry("Wisdom", "mymail@domain.com","Hi there");

  