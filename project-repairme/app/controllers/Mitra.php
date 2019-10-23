<?php 

//ini adalah file child(anak) dari core/Controller

class Mitra extends Controller{
	public function index(){
		//membuat variable data, untuk mengisikan parameter, title(cek di views/mitra/index.php);
		$data['judul'] = 'Mitra';
		//$data['nama'] = $this->model('Mahasiswa_model')->getNama();
		//memangil method view dengan parameter $data
		//templates/header -> untuk lokasi filenya ada dimana
		$this->view('templates/header', $data);
		$this->view('mitra/index', $data);
		$this->view('templates/footer');
	}
}