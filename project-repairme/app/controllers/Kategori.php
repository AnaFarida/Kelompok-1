<?php
class Kategori extends Controller{
	public function index(){
		$data['judul'] = 'Daftar kategori';
		$data['kategori'] = $this->model('kategori_model')->getAllkategori();
		$this->view('templates/header',$data);
		$this->view('kategori/index', $data);
		$this->view('templates/footer');
	}
public function tambah(){
	$this->view('templates/header',$data);
	$this->view('kategori/tambahkategori',$data);
	$this->view('templates/footer',$data);
}
public function insertkategori(){

		if($this->model('kategori_model')->inputkategori($_POST) > 0){
	header ('Location: '.BASEURL.'/kategori/');
	//Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
		exit;
	}else {
	header ('Location: '.BASEURL);
	//Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
		exit();
	}
	}
	}