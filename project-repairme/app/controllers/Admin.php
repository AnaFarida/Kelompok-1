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
		$data['tipe'] = $call->getLaptop();
		$this->view('admin/templates/header',$data);
		$this->view('admin/barang/tambahLaptop', $data);
		$this->view('admin/templates/footer');
	}

	//controller tambahdatahp
	public function tambahdatahp(){
		$data['judul'] = 'Tambah Daftar Handphone';
		$call = $this->model('Barang_model');
		$data['tipe'] = $call->getHp();
		$this->view('admin/templates/header',$data);
		$this->view('admin/barang/tambahHp', $data);
		$this->view('admin/templates/footer');
	}

	public function tambahkerusakanlaptop(){
		$data['judul'] = 'Tambah Kerusakan';
		$data['kerusakan'] = $this->model('Barang_model')->getKerusakanLaptop();
		$this->view('admin/templates/header',$data);
		$this->view('admin/kerusakan/tambahkerusakanlaptop', $data);
		$this->view('admin/templates/footer');
	}
	public function tambahkerusakanhp(){
		$data['judul'] = 'Tambah Kerusakan';
		$data['kerusakan'] = $this->model('Barang_model')->getKerusakanHp();
		$this->view('admin/templates/header',$data);
		$this->view('admin/kerusakan/tambahkerusakanhp', $data);
		$this->view('admin/templates/footer');
	}
	public function paket(){
		$data['judul'] = 'Tambah Paket';
		$data['paket'] = $this->model('Barang_model')->getAllPaket();
		$this->view('admin/templates/header',$data);
		$this->view('admin/paket', $data);
		$this->view('admin/templates/footer');
	}

	//data Mitra
	public function dataMitra(){
		$data['mitra'] = $this->model('Mitra_model')->getAllMitra();
		$this->view('admin/templates/header');
		$this->view('admin/dataMitra', $data);
		$this->view('admin/templates/footer');
	}
	//data Pelanggan
	public function dataPelanggan(){
		$data['pelanggan'] = $this->model('pelanggan_model')->getAllpelanggan();
		$this->view('admin/templates/header');
		$this->view('admin/dataPelanggan', $data);
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
		// var_dump($_POST);

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
		// var_dump($_POST);
		// $s = $this->model('Barang_model')->tambahTipeHp($_POST);
		// var_dump($s);
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

public function tambahkerusakanlaptopbaru(){
	// var_dump($_POST);
	if($this->model('Barang_model')->tambahkerusakanlaptop($_POST) > 0){
	header ('Location: '.BASEURL.'/admin/tambahkerusakanlaptop');
	Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
		exit();
	}else {
	header ('Location: '.BASEURL.'/admin/barang/tambahkerusakanlaptop');
	Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
		exit();
	}
}

public function tambahkerusakanhpbaru(){
	// var_dump($_POST);
	if($this->model('Barang_model')->tambahkerusakanhp($_POST) > 0){
	header ('Location: '.BASEURL.'/admin/tambahkerusakanhp');
	Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
		exit();
	}else {
	header ('Location: '.BASEURL.'/admin/barang/tambahkerusakanhp');
	Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
		exit();
	}
}

public function tambahpaketlagi(){
	// var_dump($_POST)
	if($this->model('Barang_model')->tambahpaket($_POST) > 0){
	header ('Location: '.BASEURL.'/admin/paket');
	Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
		exit();
	}else {
	header ('Location: '.BASEURL.'/admin/paket');
	Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
		exit();
	}

}

	
	public function pengajuanperbaikan(){	
		$data['judul'] = 'Pengajuan Perbaikan';
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'pelanggan'){
		$call = $this->model('Perbaikan_model');
		$data['perbaikan'] = $call->getPerbaikan();
		$this->view('pelanggan/templates/header',$data);
		$this->view('pelanggan/perbaikan/pengajuan', $data);
		$this->view('pelanggan/templates/footer');
		}
	}
public function delete($id){
		if ($this->model('Barang_model')->deletePaket($id) > 0) {
			//Flasher::setFlash(' berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/admin/');
			exit;
		}else{
			//Flasher::setFlash(' gagal', 'dihapus', 'danger');
			header('Location: '.BASEURL.'/admin/');
			exit;
		}
	}
 public function editKerusakanHp(){
		//var_dump($_POST);
		if($this->model('Admin_model')->updateKerusakanHp($_POST) > 0){
		header ('Location: '.BASEURL.'/admin/tambahkerusakanhp');
		Flasher::setFlash(' berhasil', 'diubah', 'success');
			exit();
		}else {
		header ('Location: '.BASEURL.'/admin/tambahkerusakanhp');
		Flasher::setFlash(' gagal', 'diubah', 'danger');	
			exit();
		}
	
	 }
public function deleteKerusakanhp($id){
		if ($this->model('Barang_model')->deleteKerusakanhp($id) > 0) {
			Flasher::setFlash(' berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/admin/tambahkerusakanhp');
			exit;
		}else{
			Flasher::setFlash(' gagal', 'dihapus', 'danger');
			header('Location: '.BASEURL.'/admin/tambahkerusakanhp');
			exit;
		}
	}

public function deleteKerusakanlaptop($id){
		if ($this->model('Barang_model')->deleteKerusakanlaptop($id) > 0) {
			Flasher::setFlash(' berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/admin/tambahkerusakanlaptop');
			exit;
		}else{
			Flasher::setFlash(' gagal', 'dihapus', 'danger');
			header('Location: '.BASEURL.'/admin/tambahkerusakanlaptop');
			exit;
		}
	}
public function deletehp($id){
		if ($this->model('Barang_model')->deleteBarangHp($id) > 0) {
			//Flasher::setFlash(' berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/admin/tambahdatahp');
			exit;
		}else{
			//Flasher::setFlash(' gagal', 'dihapus', 'danger');
			header('Location: '.BASEURL.'/admin/tambahdatahp');
			exit;
		}
	}

public function deletelaptop($id){
		if ($this->model('Barang_model')->deleteBaranglaptop($id) > 0) {
			//Flasher::setFlash(' berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/admin/tambahdatalaptop');
			exit;
		}else{
			//Flasher::setFlash(' gagal', 'dihapus', 'danger');
			header('Location: '.BASEURL.'/admin/tambahdatalaptop');
			exit;
		}
	}

public function deletepaket($id){
		if ($this->model('Barang_model')->deletePaket($id) > 0) {
			//Flasher::setFlash(' berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/admin/paket');
			exit;
		}else{
			//Flasher::setFlash(' gagal', 'dihapus', 'danger');
			header('Location: '.BASEURL.'/admin/paket');
			exit;
		}
	}

}