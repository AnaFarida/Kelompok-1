<?php 

class pelanggan_model{
	private $db;

	function __construct(){
		$this->db = new Database;
	}

	public function getAllpelanggan(){
		return $this->db->query("SELECT * FROM tb_pelanggan");
    }
    public function getDetail($id){
		return $this->db->query("SELECT * FROM tb_pelanggan WHERE id_pelanggan = ".$id);
	}
	
	public function getAllPengguna(){
		return $this->db->query("SELECT * FROM tb_user");
    }
    public function inputpelanggan($data){
		$id_jenis = 3;
		
		$nama = $data['nama'];
		$email = $data['email'];
		$no_tlp= $data['no_tlp'];
		$alamat = $data['alamat'];
		$username = $data['username'];
		$password = $data['confir'];

		$preIdUser = $this->db->query("SELECT * FROM tb_user ORDER BY id_user DESC LIMIT 1");

		foreach ($preIdUser as $key) {
			$rows = $key['id_user'];
		}

		$reUser = $rows + 1;

		$this->db->data("INSERT INTO tb_user VALUES ($reUser,'$username','$password')");


		$this->db->data("INSERT INTO tb_pelanggan (id_pelanggan,id_jenis,id_user,nama,email,no_tlp,alamat) VALUES ( NULL,'$id_jenis',$reUser,'$nama','$email','$no_tlp','$alamat')");


		$ret = 3;

		return $ret;
		}

		public function deletepelanggan($id){
		
			$preIdpelanggan = $this->db->query("SELECT * FROM tb_pelanggan WHERE id_pelanggan = " . $id);
			
			 foreach ($preIdpelanggan as $key) {
				 $rows = $key['id_user'];
			 }
	
			 $delUsr = $this->db->data("DELETE FROM `tb_user` WHERE id_user = ".$rows);
			 $delpelanggan = $this->db->data("DELETE FROM tb_pelanggan WHERE id_pelanggan ='$id'");
	
			
			
			
			return $delUsr && $delpelanggan;
		}


	}
	

