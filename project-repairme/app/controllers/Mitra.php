<?php
class Mitra extends Controller{
	public function index(){
		$data['judul'] = 'Mitra RepairMe';
		 $data['mitra'] = $this->model('Mitra_model')->getMitraNow();
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'mitra'){
		$this->view('mitra/templates/header', $data);
		$this->view('mitra/index', $data);
		$this->view('mitra/templates/footer');
		}else{
			header('Location:'.BASEURL.'/login');
		}
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

public function profile(){
		// var_dump($_SESSION['login']['data']['nama_usaha']);
		// echo $_SESSION['login'];
		$data['judul'] = 'Mitra RepairMe';
		$data['mitra'] = $this->model('Mitra_model')->getMitraNow();
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'mitra'){
		$this->view('mitra/templates/header', $data);
		$this->view('mitra/profile', $data);
		$this->view('mitra/templates/footer');
		}else{
			header('Location:'.BASEURL.'/login');
		}
	}

	public function deskripsi(){
		$data['judul'] = 'Deskripsi';
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'mitra'){
		$data['mitra'] = $this->model('Mitra_model')->getMitraNow();
		$this->view('mitra/templates/header',$data);
		$this->view('mitra/deskripsi', $data);
		$this->view('mitra/templates/footer');
	}else{
		header('Location:'.BASEURL.'/mitra/deskripsi/');
	}
	}

	public function permintaanperbaikan(){
		$data['judul'] = 'Pengajuan Perbaikan';
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'mitra'){
		$data['perbaikan'] = $this->model('Mitra_model')->getPerbaikan();
		$this->view('mitra/templates/header',$data);
		$this->view('mitra/perbaikan/pengajuan', $data);
		$this->view('mitra/templates/footer');
	}else{
		header('Location:'.BASEURL.'/mitra/deskripsi/');
	}
	}

	public function insertDeskripsi(){
		//var_dump($_POST);
		if($this->model('Mitra_model')->inputDeskripsi($_POST) > 0){
		header ('Location: '.BASEURL.'/mitra/deskripsi');
		// Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
			exit();
		}else {
		header ('Location: '.BASEURL.'/mitra/deskripsi');
		// Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
			exit();
		}
	
	 }
	 public function editDeskripsi(){
		//var_dump($_POST);
		if($this->model('Mitra_model')->updateDeskripsi($_POST) > 0){
		header ('Location: '.BASEURL.'/mitra/deskripsi');
		// Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
			exit();
		}else {
		header ('Location: '.BASEURL.'/mitra/deskripsi');
		// Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
			exit();
		}
	
	 }
	 
	 public function tolakperbaikanlaptop(){
	 // var_dump($_POST);
	 	if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'mitra') {
	 	if($this->model('Mitra_model')->tolakpengajuanlaptop($_POST) > 0){
		header ('Location: '.BASEURL.'/mitra/permintaanperbaikan');
		Flasher::setFlash(' berhasil', 'diterima', 'success');
			exit();
		}else {
		header ('Location: '.BASEURL.'/mitra/permintaanperbaikan');
		Flasher::setFlash(' gagal', 'diterima', 'danger');	
			exit();
		}
	 }
	 }
	 public function buktitrans(){
	// var_dump($_POST);
	if($this->model('Mitra_model')->inputTransaksi($_POST) > 0){
	header ('Location: '.BASEURL.'/home/paket');
	Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
		exit();
	}else {
	header ('Location: '.BASEURL.'/home/paket');
	Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
		exit();
	}
}
	
}
