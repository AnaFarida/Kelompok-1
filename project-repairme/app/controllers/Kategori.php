<?php
class Kategori extends Controller{
	function index(){
		$data['kategori'] = $this->model('Kategori_model')->tampil_data()->result();
		$this->view('templates/header',$data);
		$this->load->view('kategori/index',$data);
		$this->view('templates/footer');
	}
 
	function tambah(){
		$this->view('templates/header');
		$this->load->view('kategori/tambahkategori');
		$this->view('templates/footer');
	}

	function tambah_aksi(){
		$kategori = $this->input->post('kategori');
 
		$data = array(
			'kategori' => $kategori,
			);
		$this->Kategori_model->input_data($data,'kategori');
		redirect('kategori/index');
	}
 
// 	public function index(){
// 		$data['judul'] = 'kategori';
// 		$data['kategori'] = $this->model('Kategori_model')->getAllkategori();
// 		$this->view('templates/header',$data);
// 		$this->view('kategori/index', $data);
// 		$this->view('templates/footer');
// 	}
// public function (){
// 	$this->view('templates/header');
// 	$this->view('kategori/tambahkategori');
// 	$this->view('templates/footer');
// }
// public function insertbarang(){

// 	if($this->model('Kategori_model')->inputpelanggan($_POST) > 0){
// 		header ('Location: '.BASEURL.'/kategori/');
		
// 			exit();
// 		}else {
			
// 			exit();
// 		}
// }

public function delete($id){
		if ($this->model('kategori_model')->deletepelanggan($id) > 0) {
			//Flasher::setFlash(' berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/kategori/');
			exit;
		}else{
			// //Flasher::setFlash(' gagal', 'dihapus', 'danger');
			// header('Location: '.BASEURL.'//');
			exit;
		}
	}
}

// <?php 
 
 
// class Crud extends CI_Controller{
 
// 	function __construct(){
// 		parent::__construct();		
// 		$this->load->model('m_data');
// 		$this->load->helper('url');
 
// 	}
 
// 	function index(){
// 		$data['user'] = $this->m_data->tampil_data()->result();
// 		$this->load->view('v_tampil',$data);
// 	}
 
// 	function tambah(){
// 		$this->load->view('v_input');
// 	}
 
// }