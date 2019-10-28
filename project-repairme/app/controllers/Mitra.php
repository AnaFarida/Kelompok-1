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
   public function insertMitra(){
	if($this->model('Mitra_model')->inputMitra($_POST)>0){
	header ('Location: '.BASEURL.'/registrasi');
		echo "sukses";
	}else {
		header ('Location: '.BASEURL);
		echo "gagal";
	}
   }
}