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

	public function tambahbarang(){
		$data['judul'] = 'Tambah Barang';
		$data['barang'] = $this->model('Admin_model')->getAllKategori();
		$this->view('admin/templates/header',$data);
		$this->view('admin/barang/tambahBarang', $data);
		$this->view('admin/templates/footer');
	}

	public function tambahkerusakan(){
		$data['judul'] = 'Tambah Kerusakan';
		$data['kerusakan'] = $this->model('Admin_model')->getAllKerusakan();
		$this->view('admin/templates/header',$data);
		$this->view('admin/kerusakan/tambahkerusakan', $data);
		$this->view('admin/templates/footer');
	}


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
}
public function insertbarang(){
	// var_dump($_POST);
	if($this->model('Admin_model')->tambahbarang($_POST) > 0){
	header ('Location: '.BASEURL.'/admin/barang');
	Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
		exit();
	}else {
	header ('Location: '.BASEURL.'/admin/barang');
	// Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
		exit();
	}
}
public function insertkerusakan(){
	// var_dump($_POST);
	if($this->model('Admin_model')->tambahkerusakan($_POST) > 0){
	header ('Location: '.BASEURL.'/admin/tambahkerusakan');
	// Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
		exit();
	}else {
	header ('Location: '.BASEURL.'/admin/barang');
	// Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
		exit();
	}
}


}