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
	
	public function getAllBarang(){
		return $this->db->query("SELECT * FROM tb_barang");
	}
	public function getLaptop(){
		return $this->db->query("SELECT * FROM tb_barang WHERE id_kategori = 1");
	}
	public function getHp(){
		return $this->db->query("SELECT * FROM tb_barang WHERE id_kategori = 2");
	}

	public function getAllKerusakan(){
		return $this->db->query("SELECT * FROM tb_kerusakan");
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

	public function tambahbarang($data){
		$kat = $data['brgKategori'];
		$merk = $data['brgMerk'];
		$tipe = $data['brgTipe'];

	

		$result = $this->db->data("INSERT INTO tb_barang VALUES ( NULL,'$kat','$merk','$tipe')");
		return $result;
	}
	public function tambahkerusakan($data){
		$kerusakan = $data['kerusakan'];
		return $this->db->data("INSERT INTO tb_kerusakan VALUES ( NULL,'$kerusakan')");
	}


}