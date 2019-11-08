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
		
		$id_jenis = 2;
		
		
		
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

		$preIdUser = $this->db->query("SELECT * FROM tb_user ORDER BY id_user DESC LIMIT 1");

		foreach ($preIdUser as $key) {
			$rows = $key['id_user'];
		}

		$readyUser = $rows + 1;

		$this->db->data("INSERT INTO tb_user VALUES ($readyUser,'$username','$password')");


		$this->db->data("INSERT INTO tb_mitra VALUES ( NULL,'$id_jenis',$readyUser,'$nama','$nama_usaha','$email','$alamat','$no_telpon','$foto_ktp','$foto_usaha','$foto_transaksi')");


		$return = 2;
		}

		return $return;
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
}