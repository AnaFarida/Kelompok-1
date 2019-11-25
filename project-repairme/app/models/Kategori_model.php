<?php 

class Kategori_model{
	private $db;

	function __construct(){
		$this->db = new Database;
	}
	
	public function getAllmerk(){
		return $this->db->query("SELECT * FROM tb_merk");
	}
	// public function getAlltipe(){
		// return $this->db->query("SELECT * FROM tb_tipe");
	// }
    public function inputbarang($data){
		
		$merk = $data['merk'];
		// $tipe = $data['tipe']
		$conn = mysqli_connect( 'localhost', 'root', '', 'repairme');
		$merk = $data['merk'];

	  $query = $this->db->query("SELECT * FROM tb_merk ORDER BY id_merk ASC");
	  $barang = $this->db->data("INSERT INTO tb_merk VALUES (NULL, '$id_merk','$merk')");
		return $query;
		}

		public function deletemerk($id){
		
	$delmerk = $this->db->data("DELETE FROM tb_merk WHERE id_merk ='$id'");
			 
			
			
			
			return $delmerk;
		}


	}
	


