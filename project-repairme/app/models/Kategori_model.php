<?php 

class Kategori_model{
	private $db;

	function __construct(){
		$this->db = new Database;
	}

	public function getAllkategori(){
		return $this->db->query("SELECT * FROM tb_kategori");
	}
	
	public function getDetail($id){
		return $this->db->query("SELECT * FROM tb_kategori WHERE id_kategori = ".$id);
	}
			
		$kategori = $data['kategori'];
		$merk = $data['merk'];
		$tipe = $data['tipe'];

		$preIdUser = $this->db->query("SELECT * FROM tb_merk ORDER BY id_merk DESC LIMIT 1");

		foreach ($preIdkategori as $key) {
			$rows = $key['id_kategori'];
		}

		$readyKategori = $rows + 1;
		
	public function deleteKategori($id){
		
		$preIdKategori = $this->db->query("SELECT * FROM tb_kategori WHERE id_kategori = " . $id);
		
		 foreach ($preIdKategori as $key) {
		 	$rows = $key['id_merk'];
		 }

		 $delMrk = $this->db->data("DELETE FROM `tb_merk` WHERE id_merk = ".$rows);
		 $delTipe = $this->db->data("DELETE FROM `tb_tipe` WHERE id_tipe = ". $id);
		 $delKategori = $this->db->data("DELETE FROM `tb_kategori` WHERE id_kategori = ". $id);

		
		
		
		return $delMrk && $delTipe && $delKategori;
	}

	public function ubahKategori($id){
		$uKategori = $this->db->query("SELECT * FROM tb_kategori WHERE id_kategori = " . $id);
		 foreach ($uKategori as $key2){
			 $rows = $key2 ['id_merk'];
		 }
		 