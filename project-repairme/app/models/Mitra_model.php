 <?php 

class Mitra_model{
	private $db;



	function __construct(){
		$this->db = new Database;
	}

	public function getAllMitra(){
		return $this->db->query("SELECT tb_mitra.*, avg.rating_data FROM `tb_mitra`, avg WHERE tb_mitra.id_mitra = avg.id_mitra");
	}


	
	public function getDetail($id){
		return $this->db->query("SELECT * FROM tb_mitra WHERE id_mitra = $id ");
	}
	
	public function getAllPengguna(){
		return $this->db->query("SELECT * FROM tb_user");
	}

	public function inputMitra($data){
		$foto_ktp = $this->db->upload('foto_ktp');
		$foto_usaha = $this->db->upload('foto_usaha');

		$id_jenis = 2;
		
		//deklarasikan conn karena variabelnya dibutuhkan

		$conn = mysqli_connect( 'localhost', 'root', '', 'repairme');
		
		$nama = $data['nama'];
		$nama_usaha = $data['nama_usaha'];
		$email = $data['email'];
		$no_telpon= $data['no_telpon'];
		$alamat = $data['alamat'];
		$no_telpon= $data['no_telpon'];
		$lat = $data['lat'];
		$lng = $data['lng'];
		$jenis = $data['jenis'];
		//validasi username dan password

		$username = strtolower(stripslashes($data['username']));
		$password = mysqli_real_escape_string($conn, $data['password1']);
		
		$password = password_hash($password, PASSWORD_DEFAULT);
		$cekUsername = $this->db->query("SELECT * FROM tb_user");
		foreach ($cekUsername as $key) {
			if ($key['username'] == $username
			) {
				return false;
			}
		}

		$preIdUser = $this->db->query("SELECT * FROM tb_user ORDER BY id_user DESC LIMIT 1");

		foreach ($preIdUser as $key) {
			$rows = $key['id_user'];
		}

		$readyUser = $rows + 1;

		$input = $this->db->data("INSERT INTO tb_user VALUES ($readyUser,'$username','$password')") &&
		$this->db->data("INSERT INTO tb_mitra VALUES ( NULL,'$id_jenis',$readyUser,'$jenis','$nama','$nama_usaha','$email','$alamat', '$lat', '$lng','$no_telpon','$foto_ktp','$foto_usaha','')");
		return $input;
	}
		
	public function deleteMitra($id){
		
		$preIdMitra = $this->db->query("SELECT * FROM tb_mitra WHERE id_mitra = " . $id);
		
		 foreach ($preIdMitra as $key) {
		 	$rows = $key['id_user'];
		 }

		 $delUsr = $this->db->data("DELETE FROM `tb_user` WHERE id_user = ".$rows);
		 $delMitra = $this->db->data("DELETE FROM `tb_mitra` WHERE id_mitra = ". $id);

		
		
		
		return $delUsr && $delMitra;
	}

	public function ubahMitra($id){
		$uMitra = $this->db->query("SELECT * FROM tb_mitra WHERE id_mitra = " . $id);
		 foreach ($uMitra as $key2){
			 $rows = $key2 ['id_user'];
		 }
		  
	}

	// public function getDeskripsi(){
	// 	return $this->db->query("SELECT * FROM tb_deskripsi");
	// }

	// public function inputDeskripsi($data){
	// $id = $data['id_mitra'];
	// $deskripsi = $data['deskripsi'];
	// $input=$this->db->data("INSERT INTO tb_mitra VALUES ($id,'$deskripsi')");
	// return $input;
	// }

	public function updateDeskripsi($data){
	$id = $data['id_mitra'];
	$nama = $data ['nama'];
	$email= $data['email'];
	$alamat = $data['alamat'];
	$no = $data['no_tlp'];
	$deskripsi = $data['deskripsi'];
	$update=$this->db->data("UPDATE tb_mitra SET tb_mitra.nama = '$nama' , tb_mitra.email = '$email' ,tb_mitra.alamat = '$alamat' ,tb_mitra.no_tlp = '$no' ,tb_mitra.deskripsi = '$deskripsi' 
		WHERE id_mitra = $id
		");

	return $update;
	}

	public function inputTransaksi($data){
		$id_mitra = $_SESSION['login']['data']['id_mitra'];
		$foto_transaksi = $this->db->upload('foto_transaksi');
		$foto_update = $this->db->query("UPDATE tb_mitra SET foto_transaksi='$foto_transaksi' WHERE id_mitra='$id_mitra'");
		return $foto_update;
	}

		public function getPerbaikan(){
		$id_mitra = $_SESSION['login']['data']['id_mitra'];
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

	public function getPerbaikan2(){
		$id_mitra = $_SESSION['login']['data']['id_mitra'];
		$perbaikan_hp = $this->db->query("SELECT * FROM tb_perbaikan_hp WHERE id_mitra = ".$id_mitra);
		$status_perbaikan = [];
		$i = 0;
		foreach ($perbaikan_hp as $hp) {
			$status_perbaikan[$i] = $this->db->query("SELECT id_status_perbaikan,status_perbaikan FROM tb_status_perbaikan WHERE id_status_perbaikan = ".$hp['id_status_perbaikan']);
			$i++;
		}
		$pelanggan = [];
		$j = 0;
		foreach ($perbaikan_hp as $hp) {
			$pelanggan[$j] = $this->db->query("SELECT nama FROM tb_pelanggan WHERE id_pelanggan = ".$hp['id_pelanggan']);
			$j++;
		}

		$tipe_hp = [];
		$merk_hp = [];
		$k = 0;
		foreach ($perbaikan_hp as $hp) {
			if ($hp['id_tipe_hp'] != 0) {
			$tipe_hp[$k] = $this->db->query("SELECT tipe_hp,id_merk_hp FROM tb_tipe_hp WHERE id_tipe_hp = ".$hp['id_tipe_hp']);
			
			
			$merk_hp[$k] = $this->db->query("SELECT merk_hp FROM tb_merk_hp WHERE id_merk_hp = ".$tipe_hp[$k][0]['id_merk_hp']);


			}else{
				$tipe_hp[$k] = $this->db->query("SELECT tipe_hp FROM tb_ttd_hp WHERE id_ttd_hp = ".$hp['id_ttd_hp']);
				$merk_hp[$k] = $this->db->query("SELECT merk_hp FROM tb_ttd_hp WHERE id_ttd_hp = ".$hp['id_ttd_hp']);
			}
			$k++;
			
		}

		$kerusakan_hp = [];
		$ket_lain = [];
		$l = 0;
		foreach ($perbaikan_hp as $hp) {
			if ($hp['id_kerusakan_hp'] != 0) {
				$kerusakan_hp[$l] = $this->db->query("SELECT kerusakan_hp FROM tb_kerusakan_hp WHERE id_kerusakan_hp = ".$hp['id_kerusakan_hp']);
				$ket_lain[$l] = $hp['kerusakan_lain']; 
			}else{
				$kerusakan_hp[$l][0]['kerusakan_hp'] = $hp['kerusakan_lain'];
				$ket_lain[$l] = '-';
			}
			$l++;
		}

		$harga = [];
		$m = 0;
		foreach ($perbaikan_hp as $hp) {
			if ($hp['harga'] == 0) {
				$harga[$m] = 'Menunggu Kisaran Harga';
			}else{
				$harga[$m] = $hp['harga'];
			}
			$m++;
		}

		$result = ['perbaikan_hp' => $perbaikan_hp, 'pelanggan' => $pelanggan, 'tipe_hp' => $tipe_hp, 'status' => $status_perbaikan, 'merk_hp' => $merk_hp, 'kerusakan_hp' => $kerusakan_hp, 'keterangan_lain' => $ket_lain, 'harga' => $harga];

		return $result;


		// $perbaikan_hp = $this->db->query("SELECT * FROM tb_perbaikan_hp WHERE id_pelanggan = ".$id_pelanggan);
		// $result = ['laptop' => $perbaikan_laptop, 'hp' => $perbaikan_hp];
		// // return $result;
	}

	public function getMitraNow(){
		return $this->db->query("SELECT * FROM tb_mitra, avg WHERE avg.id_mitra = tb_mitra.id_mitra AND tb_mitra.id_mitra = " . $_SESSION['login']['data']['id_mitra']);
	}
 
	public function AvgRatingMitra(){
		$rating = $this->db->query("SELECT id_mitra, AVG(rating) FROM tb_rating WHERE rating GROUP BY id_mitra");
		return $rating;
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
}