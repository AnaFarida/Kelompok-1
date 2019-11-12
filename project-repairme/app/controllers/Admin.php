<?php
class Admin extends Controller{
	public function index(){
		$this->view('templates/headerAdmin');
		$this->view('admin/index');
		$this->view('templates/footerAdmin');
	}

	public function mitra(){
		$data['mitra'] = $this->model('Mitra_model')->getAllMitra();
		$this->view('templates/headerAdmin');
		$this->view('mitra/index', $data);
		$this->view('templates/footerAdmin');
	}
}