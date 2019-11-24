<?php
class Login extends Controller{
 
    function index(){
    	$data['judul'] = 'Daftar Mitra';
		$data['user'] = $this->model('Login_model')->getAllUser();
        $this->view('templates/header',$data);
        $this->view('login/index',$data);
        $this->view('templates/footer');
    }

    function checklogin(){
    	$ret = $this->model('Login_model')->checkloginkey($_POST);
    	var_dump($ret);
    	if (count($ret) == 1) {
            
            if ($ret[0]['id_jenis'] == 2) {
                // $resPass = password_verify($_POST['password'], $ret[0][''])

                mySession::setSession('true', 'mitra');
                header('Location:'.BASEURL.'/login/');
            }else if($ret[0]['id_jenis'] == 3) {
                var_dump($ret[0]['nama']);
                // mySession::setSession('true', 'pelanggan');
            }
            
    	}else if($ret == false){
            echo "gagal";
        }
    }

    function logout(){

    session_unset();
    $_SESSION = [];

    session_destroy();

    header('Location:'.BASEURL.'/login');
    exit;
    }
}
