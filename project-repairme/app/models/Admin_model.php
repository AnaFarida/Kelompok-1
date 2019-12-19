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


	public function getPerbaikan(){
		$perbaikan_laptop = $this->db->query("SELECT * FROM tb_perbaikan_laptop WHERE id_mitra = ".$id_mitra);
		$status_perbaikan = [];
		$i = 0;
		foreach ($perbaikan_laptop as $laptop) {
			$status_perbaikan[$i] = $this->db->query("SELECT id_status_perbaikan,status_perbaikan FROM tb_status_perbaikan WHERE id_status_perbaikan = ".$laptop['id_status_perbaikan']);
			$i++;
		}
		$pelanggan = [];
		$j = 0;
		foreach ($perbaikan_laptop as $laptop) {
			$pelanggan[$j] = $this->db->query("SELECT nama FROM tb_pelanggan WHERE id_pelanggan = ".$laptop['id_pelanggan']);
			$j++;
		}

		$tipe_laptop = [];
		$merk_laptop = [];
		$k = 0;
		foreach ($perbaikan_laptop as $laptop) {
			if ($laptop['id_tipe_laptop'] != 0) {
			$tipe_laptop[$k] = $this->db->query("SELECT tipe_laptop,id_merk_laptop FROM tb_tipe_laptop WHERE id_tipe_laptop = ".$laptop['id_tipe_laptop']);
			
			
			$merk_laptop[$k] = $this->db->query("SELECT merk_laptop FROM tb_merk_laptop WHERE id_merk_laptop = ".$tipe_laptop[$k][0]['id_merk_laptop']);


			}else{
				$tipe_laptop[$k] = $this->db->query("SELECT tipe_laptop FROM tb_ttd_laptop WHERE id_ttd_laptop = ".$laptop['id_ttd_laptop']);
				$merk_laptop[$k] = $this->db->query("SELECT merk_laptop FROM tb_ttd_laptop WHERE id_ttd_laptop = ".$laptop['id_ttd_laptop']);
			}
			$k++;
			
		}

		$kerusakan_laptop = [];
		$ket_lain = [];
		$l = 0;
		foreach ($perbaikan_laptop as $laptop) {
			if ($laptop['id_kerusakan_laptop'] != 0) {
				$kerusakan_laptop[$l] = $this->db->query("SELECT kerusakan_laptop FROM tb_kerusakan_laptop WHERE id_kerusakan_laptop = ".$laptop['id_kerusakan_laptop']);
				$ket_lain[$l] = $laptop['kerusakan_lain']; 
			}else{
				$kerusakan_laptop[$l][0]['kerusakan_laptop'] = $laptop['kerusakan_lain'];
				$ket_lain[$l] = '-';
			}
			$l++;
		}

		$harga = [];
		$m = 0;
		foreach ($perbaikan_laptop as $laptop) {
			if ($laptop['harga'] == 0) {
				$harga[$m] = 'Menunggu Kisaran Harga';
			}else{
				$harga[$m] = $laptop['harga'];
			}
			$m++;
		}

		$result = ['perbaikan_laptop' => $perbaikan_laptop, 'pelanggan' => $pelanggan, 'tipe_laptop' => $tipe_laptop, 'status' => $status_perbaikan, 'merk_laptop' => $merk_laptop, 'kerusakan_laptop' => $kerusakan_laptop, 'keterangan_lain' => $ket_lain, 'harga' => $harga];

		return $result;
	}

	public function terimapengajuanlaptop($data){
	$id = $data['id_perbaikan_laptop'];
	$harga = $data['hargalaptop'];
	$keterangan_lain = $data['ketlaptoplain'];
	$voucher = $data['voucherlaptop'];
	$this->db->data("INSERT INTO tb_voucher_laptop VALUES (NULL,'$voucher',$id)");
	return $this->db->data("UPDATE tb_perbaikan_laptop SET tb_perbaikan_laptop.id_status_perbaikan = 2, tb_perbaikan_laptop.harga = '$harga', tb_perbaikan_laptop.keterangan_mitra = '$keterangan_lain'
		WHERE id_perbaikan = $id
		");
	}

	public function tolakpengajuanlaptop($data){
	$id = $data['id_perbaikan_laptopx'];
	$keterangan_lain = $data['ketpenolakanlaptop'];
	$harga = '1';
	return $this->db->data("UPDATE tb_perbaikan_laptop SET tb_perbaikan_laptop.id_status_perbaikan = 3, tb_perbaikan_laptop.harga = '$harga', tb_perbaikan_laptop.keterangan_mitra = '$keterangan_lain'
		WHERE id_perbaikan = $id
		");
	}

	public function terimapengajuanhp($data){
	$id = $data['id_perbaikan_hp'];
	$harga = $data['hargahp'];
	$keterangan_lain = $data['kethplain'];
	$voucher = $data['voucherhp'];
	$this->db->data("INSERT INTO tb_voucher_hp VALUES (NULL,'$voucher',$id)");
	return $this->db->data("UPDATE tb_perbaikan_hp SET tb_perbaikan_hp.id_status_perbaikan = 2, tb_perbaikan_hp.harga = '$harga', tb_perbaikan_hp.keterangan_mitra = '$keterangan_lain'
		WHERE id_perbaikan = $id
		");
	}

	public function tolakpengajuanhp($data){
	$id = $data['id_perbaikan_hpx'];
	$keterangan_lain = $data['ketpenolakanhp'];
	$harga = '1';
	return $this->db->data("UPDATE tb_perbaikan_hp SET tb_perbaikan_hp.id_status_perbaikan = 3, tb_perbaikan_hp.harga = '$harga', tb_perbaikan_hp.keterangan_mitra = '$keterangan_lain'
		WHERE id_perbaikan = $id
		");
	}

	public function updateKerusakanHp($data){
	$id = $data['id_kerusakan_hp'];
	$kerusakan = $data ['kerusakan'];
	$update=$this->db->data("UPDATE tb_kerusakan_hp SET tb_kerusakan_hp.kerusakan = '$kerusakan'
		WHERE id_kerusakan_hp = $id
		");

	return $update;
	}



}