<?php
class Pelanggan extends Controller{
	public function index(){
		$data['judul'] = 'Daftar pelanggan';
		$data['pelanggan'] = $this->model('pelanggan_model')->getAllpelanggan();
		$this->view('templates/header',$data);
		$this->view('pelanggan/index', $data);
		$this->view('templates/footer');
	}
public function registrasi(){
	$this->view('templates/header');
	$this->view('pelanggan/registrasi');
	$this->view('templates/footer');
}
public function insertpelanggan(){

	if($this->model('pelanggan_model')->inputpelanggan($_POST) > 0){
		header ('Location: '.BASEURL.'/pelanggan/');
		// Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
			exit();
		}else {
		header ('Location: '.BASEURL.'/pelanggan/');
		// Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
			exit();
		}
}
}