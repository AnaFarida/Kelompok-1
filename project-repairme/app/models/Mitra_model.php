 <?php 

class Mitra_model{
	private $db;

	function __construct(){
		$this->db = new Database;
	}

	public function getAllMitra(){
		return $this->db->query("SELECT * FROM tb_mitra");
	}
	
	
	public function getAllPengguna(){
		return $this->db->query("SELECT * FROM tb_user");
	}

	public function inputMitra(){
		$id_mitra = rand(1000 , 5000);
		$id_jenis = 2;
		$nama = $data['nama'];
		$nama_usaha = $data['nama_usaha'];
		$email = $data['email'];
		$no_telpon= $data['no_telpon'];
		$alamat = $data['alamat'];
		$no_telpon= $data['no_telpon'];
		

		//untuk user 

		$id_user  = rand(5000,10000);
		$username = $data['username'];
		$password = $data['password'];

		//untuk upload gambar

		$imgKtp = $gambar['gambar1'];	
		$img1 = catchImage($imgKtp);
		

		

		$this->db->data("INSERT INTO tb_user VALUES ('$id_user','$username', '$password')");

		return $this->db->data("INSERT INTO tb_mitra VALUES ('$id_mitra','$id_jenis','$id_user','$nama','$nama_usaha','$email','$alamat','$no_telpon','$img1','a','a')");
	}
	
	public function catchImage($img){
		$namaFileParam = $_FILES[$img]['name'];
		$ukuranFileParam = $_FILES[$img]['size'];
		$errorParam = $_FILES[$img]['error'];
		$tmpNameParam = $_FILES[$img]['tmp_name'];

		$gambar = $this->db->upload($namaFileParam,$ukuranFileParam,$errorParam,$tmpNameParam);
		if ($gambar == false) {
			return false;
		}
		
	}
		
	
}