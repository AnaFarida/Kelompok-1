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

	//controller tambahdatalaptop
	public function tambahdatalaptop(){
		$data['judul'] = 'Tambah Daftar Laptop';
		$call = $this->model('Barang_model');
		$data['merk'] = $call->getMerkLaptop();
		$data['tipe'] = $call->getTipeLaptop();
		$this->view('admin/templates/header',$data);
		$this->view('admin/barang/tambahLaptop', $data);
		$this->view('admin/templates/footer');
	}

	//controller tambahdatahp
	public function tambahdatahp(){
		$data['judul'] = 'Tambah Daftar Handphone';
		$call = $this->model('Barang_model');
		$data['merk'] = $call->getMerkHp();
		$data['tipe'] = $call->getTipeHp();
		$this->view('admin/templates/header',$data);
		$this->view('admin/barang/tambahHp', $data);
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

	public function tambahMerkLaptop(){
		if($this->model('Barang_model')->tambahMerkLaptop($_POST) > 0){
			Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
			header ('Location: '.BASEURL.'/admin/tambahdatalaptop');
			exit();
		}else {
			Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
			header ('Location: '.BASEURL.'/admin/tambahdatalaptop');
			exit();
		}
	}

	public function tambahTipeLaptop(){
		if($this->model('Barang_model')->tambahTipeLaptop($_POST) > 0){
			Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
			header ('Location: '.BASEURL.'/admin/tambahdatalaptop');
			exit();
		}else {
			Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
			header ('Location: '.BASEURL.'/admin/tambahdatalaptop');
			exit();
		}
	}

	public function tambahdatalaptopbaru(){
		if($this->model('Barang_model')->tambahLaptop($_POST) > 0){
			Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
			header ('Location: '.BASEURL.'/admin/tambahdatalaptop');
			exit();
		}else {
			Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
			header ('Location: '.BASEURL.'/admin/tambahdatalaptop');
			exit();
		}
	}

	public function tambahMerkHp(){
		if($this->model('Barang_model')->tambahMerkHp($_POST) > 0){
			Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
			header ('Location: '.BASEURL.'/admin/tambahdatahp');
			exit();
		}else {
			Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
			header ('Location: '.BASEURL.'/admin/tambahdatahp');
			exit();
		}
	}

	public function tambahTipeHp(){
		if($this->model('Barang_model')->tambahTipeHp($_POST) > 0){
			Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
			header ('Location: '.BASEURL.'/admin/tambahdatahp');
			exit();
		}else {
			Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
			header ('Location: '.BASEURL.'/admin/tambahdatahp');
			exit();
		}
	}

	public function tambahdatahpbaru(){
		if($this->model('Barang_model')->tambahHp($_POST) > 0){
			Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
			header ('Location: '.BASEURL.'/admin/tambahdatahp');
			exit();
		}else {
			Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
			header ('Location: '.BASEURL.'/admin/tambahdatahp');
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