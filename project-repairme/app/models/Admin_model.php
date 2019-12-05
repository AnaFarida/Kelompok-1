 <?php 

class Admin_model{
	private $db;



	function __construct(){
		$this->db = new Database;
	}

	public function getAllKategori(){
		$data1 = $this->db->query("SELECT * FROM tb_kategori");
		$data2 = $this->db->query("SELECT * FROM tb_merk");
		$data3 = $this->db->query("SELECT * FROM tb_tipe");
		$result = array('kategori' => $data1, 'merk' => $data2, 'tipe' => $data3);
		return $result;
	}
	public function getSpeMerk($data){
		return $this->db->query("SELECT * FROM tb_merk WHERE id_merk =".$data);
	}
	
	public function getAllKerusakan(){
		return $this->db->query("SELECT * FROM tb_kerusakan");
	}
	
	public function tambahMerkLaptop($data){
		$merkLaptop = $data['merkLaptop'];
		return $this->db->data("INSERT INTO tb_merk_laptop VALUES ( NULL,'$merkLaptop')");
	}

	
	public function tambahkerusakan($data){
		$kerusakan = $data['kerusakan'];
		return $this->db->data("INSERT INTO tb_kerusakan VALUES ( NULL,'$kerusakan')");
	}


}