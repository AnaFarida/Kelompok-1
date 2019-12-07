 <?php 

class Barang_model{
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
	
	// untuk laptop

	public function tambahMerkLaptop($data){
		$merk_laptop = $data['merk_laptop'];
		return $this->db->data("INSERT INTO tb_merk_laptop VALUES ( NULL,'$merk_laptop')");
	}

	public function getMerkLaptop(){
		return $this->db->query("SELECT DISTINCT ml.id_merk_laptop, merk_laptop FROM tb_merk_laptop ml JOIN tb_tipe_laptop tl ON ml.id_merk_laptop = tl.id_merk_laptop");
	}


	public function getTipeLaptop(){
		return $this->db->query("SELECT * FROM tb_tipe_laptop");
	}


	public function tambahTipeLaptop($data){
		$merk_laptop = $data['merklaptop'];
		$tipe_laptop = $data['tipelaptop'];
		return $this->db->data("INSERT INTO tb_tipe_laptop VALUES ( NULL,'$tipe_laptop','$merk_laptop')");
	}

	public function getLaptop(){
		return $this->db->query("SELECT * FROM tb_laptop");
	}

	// untuk menambah barang hp

	public function tambahMerkHp($data){
		$merk_hp = $data['merk_hp'];
		return $this->db->data("INSERT INTO tb_merk_hp VALUES ( NULL,'$merk_hp')");
	}

	public function getMerkHp(){
		return $this->db->query("SELECT DISTINCT ml.id_merk_hp, merk_hp FROM tb_merk_hp ml JOIN tb_tipe_hp tl ON ml.id_merk_hp = tl.id_merk_hp");
	}

	public function getTipeHp(){
		return $this->db->query("SELECT * FROM tb_tipe_hp");
	}

	public function tambahTipeHp($data){
		$merk_hp = $data['merkhp'];
		$tipe_hp = $data['tipehp'];
		return $this->db->data("INSERT INTO tb_tipe_hp VALUES ( NULL,'$tipe_hp','$merk_hp')");
	}

	public function tambahkerusakanLaptop($data){
		$kerusakan = $data['kerusakan'];
		return $this->db->data("INSERT INTO tb_kerusakan_laptop VALUES ( NULL,'$kerusakan')");
	}
	public function getKerusakanLaptop(){
		return $this->db->query("SELECT * FROM tb_kerusakan_laptop");
	}
	public function tambahkerusakanHp($data){
		$kerusakan = $data['kerusakan'];
		return $this->db->data("INSERT INTO tb_kerusakan_hp VALUES ( NULL,'$kerusakan')");
	}
	public function getKerusakanHp(){
		return $this->db->query("SELECT * FROM tb_kerusakan_hp");
	}


	// untuk pengajuan perbaikan laptop
	
	public function tambahkerusakanLaptop($data){
		$kerusakan = $data['kerusakan'];
		return $this->db->data("INSERT INTO tb_kerusakan_laptop VALUES ( NULL,'$kerusakan')");
	}


}