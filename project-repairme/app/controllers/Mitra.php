<?php
class Mitra extends Controller{
	public function index(){
		$data['judul'] = 'Daftar Mitra';
		$data['mitra'] = $this->model('Mitra_model')->getAllMitra();
		$this->view('templates/header',$data);
		$this->view('mitra/index', $data);
		$this->view('templates/footer');
	}
public function registrasi(){
	$data['judul'] = 'Registrasi';
	$this->view('templates/header',$data);
	$this->view('mitra/registrasi', $data);
	$this->view('templates/footer');
}
// public function insertMitra(){
		
// 		if ($this->model('Mitra_model')->inputMitra($_POST) > 0) {
// 			//Flasher::setFlash(' berhasil', 'ditambahkan', 'success');

// 			header('Location: '.BASEURL.'/mitra');
// 			exit;
// 		}else{
// 			//Flasher::setFlash(' gagal', 'ditambahkan', 'danger');
// 			echo "gagal";
// 			header('Location: '.BASEURL.'/mitra');
// 			exit;
// 		}
// 		}
// 	}
   }
  public function insertMitra(){
	if($this->model('Mitra_model')->inputMitra($_POST)>0){
	header ('Location: '.BASEURL.'/registrasi');
		echo "sukses";
	}else {
		header ('Location: '.BASEURL);
		echo "gagal";
	}
   }
   public function upload(){
	if ($this-> model('Mitra_model')->uploadmitra($_POST)>0){
	header ('Location: '.BASEURL.'registrasi');
		echo "upload sukses";
	}else {
		header ('Location: '.BASEURL);
		echo"upload gagal ";
	}
   }
   
}