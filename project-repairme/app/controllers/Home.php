<?php 

//ini adalah file child(anak) dari core/Controller

class Home extends Controller{
	public function index(){
		// //membuat variable data, untuk mengisikan parameter, title(cek di views/home/index.php);
		// $data['judul'] = 'Home';
		// $data['user'] = $this->model('User_model')->getUser();
		// //memangil method view dengan parameter $data
		// //templates/header -> untuk lokasi filenya ada dimana
		$this->view('templates/head');
		$this->view('home/index');
		$this->view('templates/foot');
		// require '../app/views/home/index.php';
	}
}