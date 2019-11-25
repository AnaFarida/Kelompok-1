<?php 
 
class Kategori_model{
	function tampil_data(){
		return $this->db->get('kategori');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
class Kategori_model{
	private $db;

	function __construct(){
		$this->db = new Database;
	}
	
	public function getAllkategori(){
		return $this->db->query("SELECT * FROM tb_kategori");
	}
	public function getAllmerk(){
		return $this->db->query("SELECT * FROM tb_merk");
	}
	public function getAlltipe(){
		return $this->db->query("SELECT * FROM tb_tipe");
	}
    public function inputdatabarang($data){
		
		$kategori = $data['kategori'];
		$merk = $data['merk'];
		$tipe = $data['tipe']


		$inputbarang = $this->db->data("INSERT INTO tb_kategori VALUES (NULL,'$kategori')") 	&&
			$this->db->data("INSERT INTO tb_merk VALUES ( NULL,'$merk')")  &&
			$this->db->data("INSERT INTO tb_tipe VALUES ( NULL,'$tipe',)");
	
		return $inputbarang;
		}

		// public function deletekategori($id){
		
	
		// 	 $delkategori = $this->db->data("DELETE FROM `tb_kategori` WHERE id_kategori = ".$rows);
		// 	 $delmerk = $this->db->data("DELETE FROM `tb_merk` WHERE id_merk ='id'");
		// 	 $deltipe = $this->db->data("DELETE FROM tb_tipe WHERE id_tipe ='$id'");
	
			
			
			
		// 	return $delkategori && $delmerk && $deltipe;
		// }


	}
	


