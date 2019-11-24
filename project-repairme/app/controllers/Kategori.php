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

	if($this->model('Kategori_model')->inputbarang() > 0){
		header ('Location: '.BASEURL.'/kategori/');
		
			exit();
		}else {
			
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