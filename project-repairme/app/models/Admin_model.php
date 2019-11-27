 <?php 

class Admin_model{
	private $db;



	function __construct(){
		$this->db = new Database;
	}

	public function getAllKategori(){
		return $this->db->query("SELECT * FROM tb_kategori");
	}
	
	public function getAllMerk(){
		return $this->db->query("SELECT * FROM tb_merk");
	}
	
	public function getAlltipe(){
		return $this->db->query("SELECT * FROM tb_tipe");
	}

	public function inputkategori($data){
		
		$kategori = $data['kategori'];

		

		$result = $this->db->data("INSERT INTO tb_kategori VALUES ( NULL,'$kategori')");
		return $result;
	}

	public function inputmerk($data){
		
		$merk = $data['merk'];

		

		$result = $this->db->data("INSERT INTO tb_merk VALUES ( NULL,'$merk')");
		return $result;
	}

	public function inputtipe($data){
		
		$tipe = $data['tipe'];

		

		$result = $this->db->data("INSERT INTO tb_tipe VALUES ( NULL,'$tipe')");
		return $result;
	}
		

}