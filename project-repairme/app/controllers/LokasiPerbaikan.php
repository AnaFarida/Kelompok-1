<?php 

class LokasiPerbaikan extends Controller{
	public function index(){
		$data['judul'] = 'Cari Mitra';
		$this->view('templates/header',$data);
		$this->view('petaLokasi/index');
		$this->view('templates/footer');
	}
}