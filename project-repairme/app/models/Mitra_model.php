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

	public function inputMitra($data){
		
		$id_mitra = "mitra" . rand(1000,5000);
		$id_jenis = 2;
		$id_user = "user" . rand(6000,10000);
		$nama = $data['nama'];
		$nama_usaha = $data['nama_usaha'];
		$email = $data['email'];
		$no_telpon= $data['no_telpon'];
		$alamat = $data['alamat'];
		$no_telpon= $data['no_telpon'];
		$username = $data['username'];
		$password = $data['password2'];

		$foto_ktp = $this->db->upload('foto_ktp');
		$foto_usaha = $this->db->upload('foto_usaha');
		$foto_transaksi = $this->db->upload('foto_transaksi');
		if($foto_ktp && $foto_usaha && $foto_transaksi == false){
			$return = false;
			exit;
		}else{
		$this->db->data("INSERT INTO tb_user VALUES ('$id_user','$username','$password')");

		$this->db->data("INSERT INTO tb_mitra VALUES ('$id_mitra','$id_jenis','$id_user','$nama','$nama_usaha','$email','$alamat','$no_telpon','$foto_ktp','$foto_usaha','$foto_transaksi')");
		$return = 2;
		}

		return $return;
	}
	

		
	
}