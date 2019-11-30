<?php
class Mitra extends Controller{
	public function index(){
		$data['judul'] = 'Daftar Mitra';
		$data['mitra'] = $this->model('Mitra_model')->getAllMitra();
		$this->view('templates/header',$data);
		$this->view('mitra/index', $data);
		$this->view('templates/footer');
	}

public function Panel(){
		$this->view('templates/header');
		$this->view('mitra/PanelMitra');
		$this->view('templates/footerPanel');
	}
public function registrasi(){
	$data['mitra'] = $this->model('Mitra_model')->getAllMitra();
	$data['user'] = $this->model('User_model')->getAllUser();
	$data['judul'] = 'Registrasi';
	// $this->view('templates/headerReg');
	$this->view('templates/header', $data);
	$this->view('mitra/registrasi', $data);
	$this->view('templates/footer');
	// $this->view('templates/footerReg');
}
public function insertMitra(){
	// var_dump($_POST);
	// var_dump($_FILES);
	// $hasil = $this->model('Mitra_model')->inputMitra($_POST);
	// var_dump($hasil);
	if($this->model('Mitra_model')->inputMitra($_POST) > 0){
	header ('Location: '.BASEURL.'/mitra/');
	// Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
		exit();
	}else {
	header ('Location: '.BASEURL.'/mitra/');
	// Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
		exit();
	}

	
}

public function detailMitra($id){
	$data['judul'] = 'Detail Mitra';
	$data['mitra'] = $this->model('Mitra_model')->getDetail($id);
	$this->view('templates/header', $data);
	$this->view('mitra/detailMitra', $data);
	$this->view('templates/footer');

}

	public function delete($id){
		if ($this->model('Mitra_model')->deleteMitra($id) > 0) {
			//Flasher::setFlash(' berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/mitra/');
			exit;
		}else{
			//Flasher::setFlash(' gagal', 'dihapus', 'danger');
			header('Location: '.BASEURL.'/mitra/');
			exit;
		}
	}
public function ubah(){
	
}
}