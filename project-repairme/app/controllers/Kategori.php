<?php 

class Perbaikan extends Controller{
	public function barang(){
		$data['kategori'] = $this->model('Kategori_model')->getAllKategori();
		//$data['merk'] = $this->model('Admin_model')->getAllMerk();
		// $data['tipe'] = $this->model('Admin_model')->getAllTipe();
		$this->view('templates/header');
		$this->view('kategori/tambahkategori', $data);
		$this->view('templates/footer');
	}
 
	public function insertkategori(){
        if($this->model('Kategori_model')->inputkategori($_POST) > 0){
        header ('Location: '.BASEURL.'/kategori/barang');
        // Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
            exit();
        }else {
        header ('Location: '.BASEURL.'/kategori/barang');
        // Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
            exit();
        }
    }
    
    public function insertmerk(){
        if($this->model('Kategori_model')->inputmerk($_POST) > 0){
        header ('Location: '.BASEURL.'/kategori/barang');
        // Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
            exit();
        }else {
        header ('Location: '.BASEURL.'/kategori/barang');
        // Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
            exit();
        }
    }
    
    public function inserttipe(){
        if($this->model('Kategori_model')->inputtipe($_POST) > 0){
        header ('Location: '.BASEURL.'/kategori/barang');
        // Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
            exit();
        }else {
        header ('Location: '.BASEURL.'/kategori/barang');
        // Flasher::setFlash(' gagal', 'ditambahkan', 'danger');	
            exit();
        }
    }
}