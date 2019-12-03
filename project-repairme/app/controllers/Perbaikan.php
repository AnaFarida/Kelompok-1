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
		$data['all'] = $call->getAllKategori();
		$this->view('templates/header',$data);
		$this->view('perbaikan/barangkerusakan', $data);
		$this->view('templates/footer');
	}

	public function detail(){
		$data['judul'] = 'Detail';
		$data['id'] = $this->model('Mitra_model')->getDetail($_POST['id']);
		$this->view('templates/header',$data);
		$this->view('perbaikan/detail', $data);
		$this->view('templates/footer');
	}
}
