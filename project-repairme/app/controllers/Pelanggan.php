<?php
class Pelanggan extends Controller{
	public function index(){
		$data['judul'] = 'Pelanggan RepairMe';
		//$data['pelanggan'] = $this->model('pelanggan_model')->getAllpelanggan();
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'pelanggan'){
			$this->view('pelanggan/templates/header', $data);
			$this->view('pelanggan/index', $data);
			$this->view('pelanggan/templates/footer');
			}else{
				header('Location:'.BASEURL.'/login');
			}
		}
		
public function registrasi(){
	$data['judul'] = 'Registrasi pelanggan';
	$data['pelanggan'] = $this->model('pelanggan_model')->getAllpelanggan();
	$data['user'] = $this->model('User_model')->getAllUser();
	$this->view('templates/header', $data);
	$this->view('pelanggan/regis', $data);
	$this->view('templates/footer');
}
public function insertpelanggan(){
	// var_dump($_POST);
	if($this->model('pelanggan_model')->inputpelanggan($_POST) > 0){
		header ('Location: '.BASEURL.'/pelanggan/');
		// Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
			exit();
		}else {
		// header ('Location: '.BASEURL.'/pelanggan/');
		// Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
			exit();
		}
}

public function detailPelanggan($id){
	$data['judul'] = 'Detail Pelanggan';
	$data['pelanggan'] = $this->model('Pelanggan_model')->getDetail($id);
	$this->view('templates/header', $data);
	$this->view('pelanggan/detailPelanggan', $data);
	$this->view('templates/footer');

}

public function delete($id){
		if ($this->model('pelanggan_model')->deletepelanggan($id) > 0) {
			//Flasher::setFlash(' berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/pelanggan/');
			exit;
		}else{
			//Flasher::setFlash(' gagal', 'dihapus', 'danger');
			header('Location: '.BASEURL.'/mitra/');
			exit;
		}
	}

public function profile(){
		// var_dump($_SESSION['login']['data']['nama_usaha']);
		// echo $_SESSION['login'];
		$data['judul'] = 'Pelanggan RepairMe';
		$data['pelanggan'] = $this->model('pelanggan_model')->getAllPelanggan();
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'pelanggan'){
		$this->view('pelanggan/templates/header', $data);
		$this->view('pelanggan/profile', $data);
		$this->view('pelanggan/templates/footer');
		}else{
			header('Location:'.BASEURL.'/login');
		}
	}

public function editProfile(){
		
		$data['judul'] = 'editprofile';
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'pelanggan'){
		$data['Pelanggan'] = $this->model('Pelanggan_model')->getAllpelanggan();
		$this->view('pelanggan/templates/header',$data);
		$this->view('pelanggan/editprofile', $data);
		$this->view('pelanggan/templates/footer');
		}
	}
 public function editProfilePel(){
		//var_dump($_POST);
		if($this->model('pelanggan_model')->updatePelanggan($_POST) > 0){
			session_destroy();
			session_start();
			$_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'pelanggan';
		header ('Location: '.BASEURL.'/pelanggan/');
		// Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
			exit();
		}else {
		header ('Location: '.BASEURL.'/pelanggan/editprofile');
		// Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
			exit();
		}
	
	 }

public function beriRating(){
		
		$data['judul'] = 'BeriRating';
		$data['mitra'] = $this->model('Mitra_model')->getAllMitra();
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'pelanggan'){
		$this->view('templates/header',$data);
		$this->view('pelanggan/rating/ratingmitra', $data);
		$this->view('templates/footer');
		}
	}
}