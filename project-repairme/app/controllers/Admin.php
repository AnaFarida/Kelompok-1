<?php
class Admin extends Controller{
	public function index(){
		$this->view('templates/headerAdmin');
		$this->view('admin/index');
		$this->view('templates/footerAdmin');
	}

	// public function finance(){
	// 	require '../app/views/admin/dashboard-finance.html';
	// }

	public function dataMitra(){
		$data['mitra'] = $this->model('Mitra_model')->getAllMitra();
		$this->view('templates/headerAdmin');
		$this->view('admin/dataMitra', $data);
		$this->view('templates/footerAdmin');
	}

	public function petaLokasi(){
		$this->view('templates/headerAdmin');
		$this->view('admin/ControlMaps');
		$this->view('templates/footerAdmin');
	}
}

