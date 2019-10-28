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
		return $this->db->data("INSERT INTO tb_mitra VALUES (NULL,'$nama',NULL,NULL,NULL,NULL,NULL)");
	}
}