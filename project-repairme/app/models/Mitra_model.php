<?php 

class Mitra_model{
	private $db;

	function __construct(){
		$this->db = new Database;
	}

	public function getAllMitra(){
		return $this->db->query("SELECT * FROM tb_mitra");
	}
	
	public function inputMitra($data){
		$id_mita = $data['id_mitra'];
		$nama = $data['nama'];
		$no_telpon= $data['no_telpon'];
		$alamat = $data['alamat'];
		$bukti_pembayaran = $data['bukti_pembayaran'];
		$foto_ktp = $data['foto_ktp'];
		$foto_usaha = $data['foto_usaha'];
		$username = $data['username'];
		$password = $data['password'];
		return $this->db->data("INSERT INTO tb_mitra VALUES ('$id_mitra','$nama','$no_telpon','$alamat','$bukti_pembayaran','$foto_ktp','$foto_usaha','$username','$password')");
	}
}