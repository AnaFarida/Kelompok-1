<?php
class Login extends Controller{
 
    function index(){
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }
	 function proses(){
        $this->model('Login_model')->proses($_POST) ;

    }

     function logout(){
        $this->session->sess_destroy();
        $url=BASEURL('');
        redirect($url);
    }
}
