<?php
class Admin extends Controller{
	public function index(){
		$data['judul'] = 'Admin';
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'admin') {
		$this->view('admin/templates/header', $data);
		$this->view('admin/index',$data);
		$this->view('admin/templates/footer');
		}else{
			header('Location:'.BASEURL.'/login');
		}
	}

	public function barang(){
		$data['kategori'] = $this->model('Admin_model')->getAllKategori();
		//$data['merk'] = $this->model('Admin_model')->getAllMerk();
		// $data['tipe'] = $this->model('Admin_model')->getAllTipe();
		$this->view('admin/templates/header');
		$this->view('admin/tambahKategori', $data);
		$this->view('admin/templates/footer');
	}


	// public function finance(){
	// 	require '../app/views/admin/dashboard-finance.html';
	// }

	public function dataMitra(){
		$data['mitra'] = $this->model('Mitra_model')->getAllMitra();
		$this->view('admin/templates/header');
		$this->view('admin/dataMitra', $data);
		$this->view('admin/templates/footer');
	}

	public function petaLokasi(){
		$this->view('admin/templates/header');
		$this->view('admin/ControlMaps');
		$this->view('admin/templates/footer');
	}

	public function chart(){
		$this->view('admin/templates/header');
		$this->view('admin/chart');
		$this->view('admin/templates/footer');
	}

	public function insertkategori(){
	if($this->model('Admin_model')->inputkategori($_POST) > 0){
	header ('Location: '.BASEURL.'/admin/barang');
	// Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
		exit();
	}else {
	header ('Location: '.BASEURL.'/admin/barang');
	// Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
		exit();
	}
}

public function insertmerk(){
	if($this->model('Admin_model')->inputmerk($_POST) > 0){
	header ('Location: '.BASEURL.'/admin/barang');
	// Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
		exit();
	}else {
	header ('Location: '.BASEURL.'/admin/barang');
	// Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
		exit();
	}
}

public function inserttipe(){
	if($this->model('Admin_model')->inputtipe($_POST) > 0){
	header ('Location: '.BASEURL.'/admin/barang');
	// Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
		exit();
	}else {
	header ('Location: '.BASEURL.'/admin/barang');
	// Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
		exit();
	}

// public function insertbarang(){
// 	if($this->model('Admin_model')->inputtipe($_POST) > 0){
// 	header ('Location: '.BASEURL.'/admin/barang');
// 	// Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
// 		exit();
// 	}else {
// 	header ('Location: '.BASEURL.'/admin/barang');
// 	// Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
// 		exit();
// 	}
}

}