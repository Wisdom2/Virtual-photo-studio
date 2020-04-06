<?php
 class Customer{
        
 		private $db_conn;

 		public function __construct($con){
 			$this->db_conn = $con;
 		}
		 	//sign up method
 		
		public function registerCustomer($firstName,$lastName,$gender,$dob,$email,$password,$contactNumber){
				try {
					$query = $this->db_conn->prepare("INSERT INTO customers (firstname,lastname,gender,dob,email,password,phonenumber) VALUES(:fname, :lname, :gender,:dob, :email, :password, :contactnumber)");
				$values = array('fname'=>$firstName,'lname'=>$lastName, 'gender'=>$gender, 'dob'=>$dob, 'email'=>$email, 'password'=>md5($password),'contactnumber'=>$contactNumber);
				$query->execute($values);
				
				$getLastIdInserted = $this->db_conn->lastInsertId();
				return $getLastIdInserted;
				
				} catch (PDOException $e) {
					return $e->getMessage();
				}
		}

		public function loginCustomer($email,$password){
			 	try {
				 		 $query = $this->db_conn->prepare("SELECT * FROM customers WHERE email=:email AND password = :password");
				 		          $query->execute(['email'=>$email, 'password'=>md5($password)]);
				 		      return $query->rowCount();
				 		// return $query->fetch(PDO::FETCH_ASSOC);
				 		 
				 	} catch (PDOException $e) {
						return $e->getMessage();
					}
		}

		public function customerInquiry($name, $email, $msg) {
			try {
				$query = $this->db_conn->prepare("INSERT INTO customer_enquiry(name,email, msg) VALUES(:name, :email, :msg)");
		             $query->execute(['name'=>$name, ':email'=>$email, 'msg'=>$msg]);
		             return $query->rowCount();

			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		public function customerReview($customer_id, $msg) {
			try {
				$query = $this->db_conn->prepare("INSERT INTO reviews(customers_id,review_body) VALUES(:customer_id,:msg)");
		             $query->execute(['customer_id'=>$customer_id, 'msg'=>$msg]);
		            
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}
	

		public function putCustomer($firstName,$lastName,$gender,$dob,$email,$contactNumber){
				try {
					$query = $this->db_conn->prepare("Update customers SET firstname=:fname,lastname=:lname,gender=:gender,dob=:dob,phonenumber=:contactnumber WHERE email=:email");

				$values = array('fname'=>$firstName,'lname'=>$lastName, 'gender'=>$gender, 'dob'=>$dob, 'email'=>$email,'contactnumber'=>$contactNumber);
				$query->execute($values);
				return $query->fetch(PDO::FETCH_ASSOC);
								
				} catch (PDOException $e) {
					return $e->getMessage();
				}
		}

		public function putCustomerPassword($password,$email){
				try {
				$query = $this->db_conn->prepare("Update customers SET password=:password  WHERE email=:email");
				$query->execute(['password'=>md5($password),'email' =>$email]);
				return $query->rowCount();
								
				} catch (PDOException $e) {
					return $e->getMessage();
				}
		}

		/*===================SELECT =================================================*/

		public function getCustomerEnquiries(){
	 	
	 	try {
		 		 $query = $this->db_conn->query("SELECT * FROM customer_enquiry");
		 		          
		 		 return $query->fetchAll(PDO::FETCH_ASSOC);
		 		 
		 	} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		public function getCustomerReviews(){
 	
	 	try {
		 		 $query = $this->db_conn->query("SELECT r.review_body,r.created_at,c.firstname, c.lastname, r.customers_id, r.id FROM reviews r JOIN customers c on r.customers_id = c.id");
		 		     $query->execute(); 
		 		 return $query->fetchAll(PDO::FETCH_ASSOC);
		 		 
		 	} catch (PDOException $e) {
				return $e->getMessage();
			}
		}


			public function deleteCustomerReview($id){
 	
		 	try {
			 		 $query = $this->db_conn->prepare("DELETE FROM reviews WHERE id=:id");
			 		          
			 			$query->execute(['id'=>$id]);
			 		 
			 	} catch (PDOException $e) {
					return $e->getMessage();
				}
			}


		public function getCustomer($email){
		 	try {
			 		 $query = $this->db_conn->prepare("SELECT * FROM customers WHERE email=:email");
			 		          $query->execute(['email'=>$email]);
			 		 return $query->fetchAll(PDO::FETCH_ASSOC);
			 		 
			 	} catch (PDOException $e) {
					return $e->getMessage();
				}
		}

		public function getCustomers(){
	 	try {
		 		 $query = $this->db_conn->query("SELECT * FROM customers");
		 		       
		 		 return $query->fetchAll(PDO::FETCH_ASSOC);
		 		 
		 	} catch (PDOException $e) {
				return $e->getMessage();
			}
		}


		public function getCustomerById($id){
		 	try {
			 		 $query = $this->db_conn->prepare("SELECT * FROM customers WHERE id=:id");
			 		          $query->execute(['id'=>$id]);
			 		 return $query->fetchAll(PDO::FETCH_ASSOC);
			 		 
			 	} catch (PDOException $e) {
					return $e->getMessage();
				}
		}

		/*====================================  COUNTS   =========================================*/
		public function TotalCustomers(){
			try {
				$query = $this->db_conn->query("SELECT COUNT(*) FROM customers");
				
				return $query->fetchColumn();
							
			} catch (PDOException $e) {
				return $e->getMessage();
			}
	    }

	    public function TotalCustomerEnquiry(){
			try {
				$query = $this->db_conn->query("SELECT COUNT(*) FROM customer_enquiry");
				
				return $query->fetchColumn();
							
			} catch (PDOException $e) {
				return $e->getMessage();
			}
	    }

 }
	
