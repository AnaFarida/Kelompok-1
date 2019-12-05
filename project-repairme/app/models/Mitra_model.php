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

	public function inputDeskripsi($data){
	$id = $data['id_mitra'];
	$deskripsi = $data['deskripsi'];
	$input=$this->db->data("INSERT INTO tb_deskripsi VALUES ($id,'$deskripsi')");
	return $input;
	}

	public function updateDeskripsi($data){
	$id = $data['id_mitra'];
	$deskripsi = $data['deskripsi'];
	$update=$this->db->data("UPDATE tb_deskripsi SET 
		deskripsi = '$deskripsi' 
		WHERE id_mitra = $id
		");

	return $update;
	}
}