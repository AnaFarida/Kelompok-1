 <?php 

class Perbaikan_model{
	private $db;



	function __construct(){
		$this->db = new Database;
	}

	public function tambahPerbaikanLaptop($data){
		$id_pelanggan = $data['id_pelanggan'];
		$id_mitra = $data['id_mitra'];
		$id_tipe_laptop = $data['id_tipe_laptop'];
		$id_kerusakan_laptop = $data['id_kerusakan_laptop'];
		$merk_laptop_ttd =  $data['merk_laptop_ttd'];
		$tipe_laptop_ttd = $data['tipe_laptop_ttd'];
		$ket_kerusakan_laptop_lain = $data['ket_kerusakan_laptop_lain'];
		if ($id_tipe_laptop == 0) {

		$mypre = $this->db->query("SELECT id_ttd FROM tb_ttd ORDER BY id_ttd DESC LIMIT 1");
		foreach ($mypre as $key) {
			$rows = $key['id_ttd']; 
		}
		$readyttd = $rows + 1;

		$this->db->data("INSERT INTO tb_ttd VALUES ( $readyttd,'$merk_laptop_ttd', '$tipe_laptop_ttd')");

		return $this->db->data("INSERT INTO tb_perbaikan_laptop VALUES (NULL, 1, $id_pelanggan, $id_mitra, $id_tipe_laptop, $readyttd, $id_kerusakan_laptop, '$ket_kerusakan_laptop_lain', '', 0)");
		
		}else{
			return $this->db->data("INSERT INTO tb_perbaikan_laptop VALUES (NULL, 1, $id_pelanggan, $id_mitra, $id_tipe_laptop, 0, $id_kerusakan_laptop, '$ket_kerusakan_laptop_lain', '', 0)");
		}
		
	}

		public function tambahPerbaikanHp($data){
		$id_pelanggan = $data['id_pelanggan2'];
		$id_mitra = $data['id_mitra2'];
		$id_tipe_hp = $data['id_tipe_hp'];
		$id_kerusakan_hp = $data['id_kerusakan_hp'];
		$merk_hp_ttd =  $data['merk_hp_ttd'];
		$tipe_hp_ttd = $data['tipe_hp_ttd'];
		$ket_kerusakan_hp_lain = $data['ket_kerusakan_hp_lain'];
		if ($id_tipe_hp == 0) {

		$mypre = $this->db->query("SELECT id_ttd FROM tb_ttd ORDER BY id_ttd DESC LIMIT 1");
		foreach ($mypre as $key) {
			$rows = $key['id_ttd']; 
		}
		$readyttd = $rows + 1;

		$this->db->data("INSERT INTO tb_ttd VALUES ( $readyttd,'$merk_hp_ttd', '$tipe_hp_ttd')");

		return $this->db->data("INSERT INTO tb_perbaikan_hp VALUES (NULL, 1, $id_pelanggan, $id_mitra, $id_tipe_hp, $readyttd, $id_kerusakan_hp, '$ket_kerusakan_hp_lain', '', 0)");
		
		}
		else{
			return $this->db->data("INSERT INTO tb_perbaikan_hp VALUES (NULL, 1, $id_pelanggan, $id_mitra, $id_tipe_hp, 0, $id_kerusakan_hp, '$ket_kerusakan_hp_lain', '', 0)");
		}
		
	}

	public function getPerbaikan(){
		$id_pelanggan = $_SESSION['login']['data']['id_pelanggan'];
		$perbaikan_laptop = $this->db->query("SELECT * FROM tb_perbaikan_laptop WHERE id_pelanggan = ".$id_pelanggan);
		$perbaikan_hp = $this->db->query("SELECT * FROM tb_perbaikan_hp WHERE id_pelanggan = ".$id_pelanggan);
		$result = ['laptop' => $perbaikan_laptop, 'hp' => $perbaikan_hp];
		return $result;
	}


}