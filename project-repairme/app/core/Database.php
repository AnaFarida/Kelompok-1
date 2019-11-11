<?php
class Database{
	private $host = db_HOST;
	private $user = db_USER;
	private $pass = db_PASS;
	private $db_name = db_NAME;
	private $conn;
	public function __construct(){
		$this->conn = mysqli_connect( db_HOST, db_USER, db_PASS, db_NAME);
		return $this->conn;
	}
	public function query($query){
		$conn = $this->conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}
	
	public function data($query){
		$conn = $this->conn;
		mysqli_query($conn, $query);
		return  mysqli_affected_rows($conn);
	}

	//function untuk upload files

	function upload($data){
		$namaFile = $_FILES[$data]['name'];
		$ukuranFile = $_FILES[$data]['size'];
		$error = $_FILES[$data]['error'];
		$tmpName = $_FILES[$data]['tmp_name'];

	//jika gambar tidak di upload
		
		if($error === 4){
			echo "<script>alert('Masukkan Gambar!!');</script>";
			return false;
		}

	//jika yg di upload bukan gambar

		$valid = ['jpg', 'jpeg', 'png'];

	//explode untuk mengubah string menjadi array(memecah)
	// '.' yang mau di pecah selanjutnya

		$ekstensiGambar = explode('.', $namaFile);

	//mengambil array yang paling akhir (end)
	//menjadikan huruf kecil semua (strtolower())

		$ekstensiGambar = strtolower(end($ekstensiGambar));
		if(!in_array($ekstensiGambar, $valid)){
			echo "<script>alert('yang anda Upload bukan Gambar!');</script>";
			return false;
		}

	//cek ukurannya terlalu besar

		if ($ukuranFile > 1000000) {
			echo "<script>
			alert('Gambar terlalu besar!');
			</script>";
			return false;
		}

	//membuat nama file baru

		$namaFileBaru = uniqid().'.'.$ekstensiGambar;

	//jika lolos dari seleksi

		move_uploaded_file($tmpName, 'img/mitra/'.$namaFileBaru);
		return $namaFileBaru;
	}
}