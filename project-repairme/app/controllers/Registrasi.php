<?php 

class Registrasi extends Controller{
	public function index(){
		$data['judul'] = 'Registrasi';
		$data['Registrasi'] = $this->model('Mitra_model')->getAllMitra();
		//$this->view('templates/header',$data);
		$this->view('registrasi/index', $data);
		//$this->view('templates/footer');
	}

}