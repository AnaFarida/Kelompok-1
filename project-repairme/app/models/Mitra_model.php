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

	public function inputPengguna($dat){
		$username = $dat['username'];
		$password = $dat['password'];

		return $this->db->dat("INSERT INTO tb_user VALUES ('$username', '$password')");
	}
	public function inputMitra($data){
		$idmtr1 = rand(1 , 100). $data['id_mitra'];
		$idjns = (02) . $data[id_jenis];
		$id_mitra = "mitra" . $idmtr ;
		$id_jenis = $idjns;
		$id_user = $data['id_user'];
		$nama = $data['nama'];
		$nama_usaha = $data['nama_usaha'];
		$email = $data['email'];
		$alamat = $data['alamat'];
		$no_telpon= $data['no_telpon'];
		$foto_ktp = $data['foto_ktp'];
		$foto_usaha = $data['foto_usaha'];
		$foto_transaksi =$data['foto_transaksi'];
		
		return $this->db->data("INSERT INTO tb_mitra VALUES ('$id_mitra','$id_jenis','$id_user','$nama','$nama_usaha','$email','$alamat','$no_telpon','$foto_ktp','$foto_usaha','$foto_transaksi')");
	}
	

		
	
}