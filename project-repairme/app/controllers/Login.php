<?php
class Login extends Controller{
 
    function index(){
    	$data['judul'] = 'Daftar Mitra';
		$data['user'] = $this->model('Login_model')->getAllUser();
        $this->view('templates/header',$data);
        $this->view('login/index',$data);
        $this->view('templates/footer');
    }
}
