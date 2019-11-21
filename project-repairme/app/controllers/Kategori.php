<?php
class Kategori extends Controller{
	public function index(){
		$data['judul'] = 'Kategori';
		$data['pelanggan'] = $this->model('Kategori_model')->getAllkategori();
		$this->view('templates/header',$data);
		$this->view('Kategori/index', $data);
		$this->view('templates/footer');
	}
public function registrasi(){
	$this->view('templates/header');
	$this->view('kategori/tambahkategori');
	$this->view('templates/footer');
}
public function insertbarang(){

	if($this->model('Kategori_model')->inputpelanggan($_POST) > 0){
		header ('Location: '.BASEURL.'/kategori/');
		
			exit();
		}else {
			
			exit();
		}
}

public function delete($id){
		if ($this->model('kategori_model')->deletepelanggan($id) > 0) {
			//Flasher::setFlash(' berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/kategori/');
			exit;
		}else{
			// //Flasher::setFlash(' gagal', 'dihapus', 'danger');
			// header('Location: '.BASEURL.'//');
			exit;
		}
	}
}