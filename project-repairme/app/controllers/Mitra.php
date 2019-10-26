<?php 

class Mitra extends Controller{
	public function index(){
		$data['judul'] = 'Daftar Mitra';
		$data['mitra'] = $this->model('Mitra_model')->getAllMitra();
		$this->view('templates/header',$data);
		$this->view('mitra/index', $data);
		$this->view('templates/footer');
	}

}