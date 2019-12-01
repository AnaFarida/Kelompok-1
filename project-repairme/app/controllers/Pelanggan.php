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
	// public function panel(){
	// 	$this->view('templates/HeaderPanel');
	// 	$this->view('pelanggan/PanelPelanggan');
	// 	$this->view('templates/footerPanel');
	// }


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
}