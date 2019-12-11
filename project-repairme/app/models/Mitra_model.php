 <?php 

class Mitra_model{
	private $db;



	function __construct(){
		$this->db = new Database;
	}

	public function getAllMitra(){
		return $this->db->query("SELECT * FROM tb_mitra");
	}
	
	public function getDetail($id){
		return $this->db->query("SELECT * FROM tb_mitra WHERE id_mitra = ".$id);
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

	public function getDeskripsi(){
		return $this->db->query("SELECT * FROM tb_deskripsi");
	}

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

		public function getPerbaikan(){
		$id_mitra = $_SESSION['login']['data']['id_mitra'];
		$perbaikan_laptop = $this->db->query("SELECT * FROM tb_perbaikan_laptop WHERE id_mitra = ".$id_mitra);
		$status_perbaikan = [];
		$i = 0;
		foreach ($perbaikan_laptop as $laptop) {
			$status_perbaikan[$i] = $this->db->query("SELECT status_perbaikan FROM tb_status_perbaikan WHERE id_status_perbaikan = ".$laptop['id_status_perbaikan']);
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

		$result = ['perbaikan_laptop' => $perbaikan_laptop, 'pelanggan' => $pelanggan, 'tipe_laptop' => $tipe_laptop, 'status' => $status_perbaikan, 'merk_laptop' => $merk_laptop];

		return $result;


		// $perbaikan_hp = $this->db->query("SELECT * FROM tb_perbaikan_hp WHERE id_pelanggan = ".$id_pelanggan);
		// $result = ['laptop' => $perbaikan_laptop, 'hp' => $perbaikan_hp];
		// // return $result;
	}


}