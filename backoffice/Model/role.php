<?php  

  class Role {
  	private $db_conn;

  	public function __construct($con) {
  		$this->db_conn = $con;
  	}

    public function getRoles(){
      try {
           $query = $this->db_conn->query("SELECT name,id FROM roles");       
           return $query->fetchAll(PDO::FETCH_ASSOC);
           
        } catch (PDOException $e) {
          return $e->getMessage();
        }
    }

  }
