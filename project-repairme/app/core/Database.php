<?php 

class Database{
	private $host = db_HOST;
	private $user = db_USER;
	private $pass = db_PASS;
	private $db_name = db_NAME;

	private $conn;

	public function __construct(){
		$this->conn = mysqli_connect( db_HOST, db_USER, db_PASS, db_NAME);
		return $this->conn;
	}

   public function query($query){
	$conn = $this->conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;	
	}

	public function data($query){
	$conn = $this->conn;
	mysqli_query($conn, $query);
	return  mysqli_affected_rows($conn);

	}
}