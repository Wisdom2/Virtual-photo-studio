<?php
 class User{
        
 		private $db_conn;

 		public function __construct($con){
 			$this->db_conn = $con;
 		}
		 	//sign up method
 		
		public function registerUser($firstName,$lastName,$gender,$email,$password,$contactNumber){
				try {
					$query = $this->db_conn->prepare("INSERT INTO users (firstname,lastname,gender,email,password,phonenumber) VALUES(:fname, :lname, :gender, :email, :password, :contactnumber)");
				$values = array('fname'=>$firstName,'lname'=>$lastName, 'gender'=>$gender, 'email'=>$email, 'password'=>md5($password),'contactnumber'=>$contactNumber);
				$query->execute($values);
				
				$getLastIdInserted = $this->db_conn->lastInsertId();
				return $getLastIdInserted;
				
				} catch (PDOException $e) {
					return $e->getMessage();
				}
		}


		public function loginUser($email,$password){
			 	try {
				 		 $query = $this->db_conn->prepare("SELECT * FROM users WHERE email=:email AND password = :password");
				 		          $query->execute(['email'=>$email, 'password'=>md5($password)]);
				 		 return $query->rowCount();
				 		 
				 	} catch (PDOException $e) {
						return $e->getMessage();
					}
		}


		public function getUsers(){
			try {
				$query = $this->db_conn->query("SELECT u.firstname, u.lastname, u.phonenumber,u.gender,u.email,r.roles_id FROM users u JOIN user_roles r ON u.id=r.users_id");
			
			return $query->fetchAll(PDO::FETCH_ASSOC);
			
			
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		public function TotalUsers(){
			try {
				$query = $this->db_conn->query("SELECT COUNT(*) FROM users");
				
				return $query->fetchColumn();
							
			} catch (PDOException $e) {
				return $e->getMessage();
			}
	  }

	  	public function getUser($email){
			 	try {
				 		 $query = $this->db_conn->prepare("SELECT u.firstname, u.lastname,u.email,u.password,u.phonenumber,u.gender,u.created_at,u.updated_at,r.roles_id, u.id FROM users u 
				 		 JOIN user_roles r ON u.id=r.users_id
				 		  WHERE email=:email");
				 		 $query->execute(['email'=>$email]);
				 		 return $query->fetchAll(PDO::FETCH_ASSOC);
				 		 
				 	} catch (PDOException $e) {
						return $e->getMessage();
					}
		}

		public function putUser($firstName,$lastName,$gender,$email,$phoneNumber){
		try {
			$query = $this->db_conn->prepare("Update users SET firstname=:fname,lastname=:lname,gender=:gender,phonenumber=:phonenumber WHERE email=:email");

		$values = array('fname'=>$firstName,'lname'=>$lastName, 'gender'=>$gender, 'email'=>$email,'phonenumber'=>$phoneNumber);
		$query->execute($values);
		return $query->fetch(PDO::FETCH_ASSOC);
						
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	 }

 	public function putUserPassword($password,$email){
			try {
			$query = $this->db_conn->prepare("Update users SET password=:password  WHERE email=:email");
			$query->execute(['password'=>md5($password),'email' =>$email]);
			return $query->rowCount();
							
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}
	
 }
	/*require "../config.php";
	$db = new Database();
	$user = new User($db->connect());
echo $user->registerUser("Abigail","Abenache","Female","mymail@domain.com","1234","029129202");*/
	//var_dump($customer->loginCustomer("mymail@domain.com","1234")) ;
	//echo $customer->customerInquiry("Wisdom", "mymail@domain.com","Hi there");