<?php 

class LokasiPerbaikan extends Controller{
	public function index(){
		$data['judul'] = 'Cari Mitra';
		$data['mitra'] = $this->model('Mitra_model')->getAllMitra();
		$this->view('templates/header',$data);
		$this->view('petaLokasi/index', $data);
		$this->view('templates/footer');
	}
}