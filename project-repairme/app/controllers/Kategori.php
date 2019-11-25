<?php
class Kategori extends Controller{
	public function index(){
		$data['judul'] = 'merk';
		$data['merk'] = $this->model('Kategori_model')->getAllmerk();
		$this->view('templates/header',$data);
		$this->view('kategori/index', $data);
		$this->view('templates/footer');
	}
public function tambah(){
	$this->view('templates/header');
	$this->view('kategori/tambahkategori');
	$this->view('templates/footer');
}
public function insertbarang(){

	if($this->model('Kategori_model')->inputbarang($_POST) > 0){
			header ('Location: '.BASEURL.'/kategori/');
		
		header ('Location: '.BASEURL.'/kategori/');
			exit();
		}else {
		//	header ('Location: '.BASEURL.'/kategori/');
			exit();
		}
}

public function delete($id){
		if ($this->model('Kategori_model')->deletemerk($id) > 0) {
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