<?php 

class Barang_model{
	private $db;
	function __construct(){
		$this->db = new Database;
	}
	public function inputBarang($data){
		$input = $this->db->data("INSERT INTO tb_user VALUES ($reUser,'$username','$password')")
	}
}