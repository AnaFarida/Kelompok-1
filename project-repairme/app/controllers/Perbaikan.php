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
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'pelanggan'){
		$data['judul'] = 'Perbaikan';
		$data['id'] = $this->model('Mitra_model')->getDetail($_POST['id']);
		$call = $this->model('Barang_model');
		$data['merk_laptop'] = $call->getMerkLaptop();
		$data['tipe_laptop'] = $call->getTipeLaptop();
		$data['merk_hp'] = $call->getMerkHp();
		$data['tipe_hp'] = $call->getTipeHp();
		$data['kerusakan_laptop'] = $call->getKerusakanLaptop();
		$this->view('templates/header',$data);
		$this->view('perbaikan/barangkerusakan', $data);
		$this->view('templates/footer');
		}else{
			header('Location:'.BASEURL.'/login');
		}
	}

	public function detail(){
		$data['judul'] = 'Detail';
		$data['kategori'] = $_POST['barang'];
		$data['id'] = $this->model('Mitra_model')->getDetail($_POST['id']);
		$call = $this->model('Barang_model');
		$data['laptop'] = $call->getTipeLaptop();
		$data['merk_laptop'] = $call->getMerkLaptop();
		if ($_SESSION['login']['pesan'] == true && $_SESSION['login']['jenis'] == 'pelanggan'){
		$this->view('templates/header',$data);
		$this->view('perbaikan/detail', $data);
		$this->view('templates/footer');
		}else{
			header('Location:'.BASEURL.'/login');
		}
	}

	public function tipekerusakan(){
		var_dump($_POST);
	}

}
