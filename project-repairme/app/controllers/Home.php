
<?php 

//ini adalah file child(anak) dari core/Controller

class Home extends Controller{
	public function index(){
		//membuat variable data, untuk mengisikan parameter, title(cek di views/home/index.php);
		$data['judul'] = 'Home';
		$data['nama'] = $this->model('Mahasiswa_model')->getNama();
		//memangil method view dengan parameter $data
		//templates/header -> untuk lokasi filenya ada dimana
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
}