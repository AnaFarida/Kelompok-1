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
		header('Location:'.BASEURL.'/login/');
	}
	}

	public function permintaanperbaikan(){
		$data['judul'] = 'Pengajuan Perbaikan';
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'mitra'){
			$call = $this->model('Mitra_model');
		$data['perbaikan'] = $call->getPerbaikan();
		$data['perbaikan2'] = $call->getPerbaikan2();
		 $data['mitra'] =$call->getMitraNow();
		$this->view('mitra/templates/header',$data);
		$this->view('mitra/perbaikan/pengajuan', $data);
		$this->view('mitra/templates/footer');
	}else{
		header('Location:'.BASEURL.'/login/');
	}
	}

	public function voucher(){
		$data['judul'] = 'Perbaikan';
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'mitra'){
		$call = $this->model('Mitra_model');
		$data['mitra'] =$call->getMitraNow();
		$data['voucher'] = $call->getVoucher();
		$data['voucher2'] = $call->getVoucher2();
		$data['perbaikan'] = $call->getPerbaikan();
		$data['perbaikan2'] = $call->getPerbaikan2();
		$this->view('mitra/templates/header',$data);
		$this->view('mitra/perbaikan/terimaVoucher', $data);
		$this->view('mitra/templates/footer');
	}else{
		header('Location:'.BASEURL.'/login/');
	}
	}

	public function vouchermasuk(){
		// var_dump($_POST);
		if($this->model('Mitra_model')->terimaVoucher($_POST) > 0){
		header ('Location: '.BASEURL.'/mitra/perbaikan');
		Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
			exit();
		}else {
		header ('Location: '.BASEURL.'/mitra/voucher');
		Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
			exit();
		}
	}
	public function vouchermasuk2(){
		// var_dump($_POST);
		if($this->model('Mitra_model')->terimaVoucher2($_POST) > 0){
		header ('Location: '.BASEURL.'/mitra/perbaikan');
		Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
			exit();
		}else {
		header ('Location: '.BASEURL.'/mitra/voucher');
		Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
			exit();
		}
	}

	public function perbaikan(){
		$data['judul'] = 'Perbaikan';
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'mitra'){
		$call = $this->model('Mitra_model');
		$data['mitra'] =$call->getMitraNow();
		$data['voucher2'] = $call->getVoucher2();
		$data['perbaikan'] = $call->getPerbaikan();
		$data['perbaikan2'] = $call->getPerbaikan2();
		$this->view('mitra/templates/header',$data);
		$this->view('mitra/perbaikan/perbaikan', $data);
		$this->view('mitra/templates/footer');
	}else{
		header('Location:'.BASEURL.'/login/');
	}
	}

	public function permintaanverifikasi(){
		$data['judul'] = 'Pengajuan Verifikasi';
		$data['mitra'] = $this->model('Mitra_model')->getAllMitra($data);
		$this->view('mitra/templates/header',$data);
		$this->view('mitra/permintaanverifikasi', $data);
		$this->view('mitra/templates/footer');
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
	  public function terimaperbaikanlaptop(){
	 // var_dump($_POST);
	 	if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'mitra') {
	 	if($this->model('Mitra_model')->terimapengajuanlaptop($_POST) > 0){
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
	 public function tolakperbaikanlaptop(){
	 // var_dump($_POST);
	 	if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'mitra') {
	 	if($this->model('Mitra_model')->tolakpengajuanlaptop($_POST) > 0){
		header ('Location: '.BASEURL.'/mitra/permintaanperbaikan');
		Flasher::setFlash(' berhasil', 'ditolak', 'success');
			exit();
		}else {
		header ('Location: '.BASEURL.'/mitra/permintaanperbaikan');
		Flasher::setFlash(' gagal', 'diterima', 'danger');	
			exit();
		}
	 }
	 }

	 //untuk handphone

	  public function terimaperbaikanhp(){
	 // var_dump($_POST);
	 	if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'mitra') {
	 	if($this->model('Mitra_model')->terimapengajuanhp($_POST) > 0){
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
	 public function tolakperbaikanhp(){
	 // var_dump($_POST);
	 	if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'mitra') {
	 	if($this->model('Mitra_model')->tolakpengajuanhp($_POST) > 0){
		header ('Location: '.BASEURL.'/mitra/permintaanperbaikan');
		Flasher::setFlash(' berhasil', 'ditolak', 'success');
			exit();
		}else {
		header ('Location: '.BASEURL.'/mitra/permintaanperbaikan');
		Flasher::setFlash(' gagal', 'diterima', 'danger');	
			exit();
		}
	 }
	 }

	 public function ubahperbaikan(){
	 	// var_dump($_POST);
	 	if($this->model('Mitra_model')->ubahperbaikan($_POST) > 0){
			header ('Location: '.BASEURL.'/mitra/perbaikan');
			Flasher::setFlash(' berhasil', 'diubah', 'success');
				exit();
			}else {
			header ('Location: '.BASEURL.'/mitra/perbaikan');
			Flasher::setFlash(' gagal', 'diubah', 'danger');	
				exit();
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
