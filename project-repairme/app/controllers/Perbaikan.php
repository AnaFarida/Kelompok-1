<?php 

class Perbaikan extends Controller{
	public function index(){
		$data['judul'] = 'Perbaikan';
		$data['mitra'] = $this->model('Mitra_model')->getAllMitra();
		$this->view('templates/header',$data);
		$this->view('perbaikan/index', $data);
		$this->view('templates/footer');
	}

	public function barangkerusakan(){
		$data['judul'] = 'Perbaikan';
		$data['id'] = $this->model('Mitra_model')->getDetail($_POST['id']);
		$call = $this->model('Admin_model');
		$data['barang'] = $call->getAllBarang();
		$data['hp'] = $call->getHp();
		$data['laptop'] = $call->getLaptop();
		$this->view('templates/header',$data);
		$this->view('perbaikan/barangkerusakan', $data);
		$this->view('templates/footer');
	}
}
