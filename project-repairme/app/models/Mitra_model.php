<?php 

class Mitra_model{
	private $db;

	function __construct(){
		$this->db = new Database;
	}

	public function getAllMitra(){
		return $this->db->query("SELECT * FROM tb_mitra");
	}
	
	public function inputMitra($data){
		$nama = $data['nama'];
		$username = $data['username'];
		$pass = $data['password'];
		$out = $this->db->data("INSERT INTO tb_mitra VALUES (NULL,'$username','$nama','$pass',NULL,'s','s','sdf','sgfas')");
		return $out;
	}
}