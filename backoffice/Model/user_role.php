<?php
 class UserRole{
        
 		private $db_conn;

 		public function __construct($con){
 			$this->db_conn = $con;
 		}
		 	//sign up method
 		
		public function PostRole($users_id, $role_id){
				try {
					$query = $this->db_conn->prepare("INSERT INTO user_roles(roles_id,users_id) VALUES(:roles_id,:users_id)");
				   $values = array('roles_id'=>$role_id, 'users_id'=>$users_id);
				   $query->execute($values);
				
				} catch (PDOException $e) {
					return $e->getMessage();
				}
		}

}
