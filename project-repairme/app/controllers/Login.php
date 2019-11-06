<?php
class Login extends Controller{
    // function __construct(){
    //     parent::__construct();
    //     $this->load->model('Login_model');
    // }
 
    function index(){
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }
 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $def=$this->Login_model->cek($username,$password);
        if (mysql_num_rows($def) == 1) {
            $a = mysql_query("select * from tb_admin where username='$username'");
            $a1 = mysql_fetch_array ($a);
            $p = mysql_query("select * from tb_mitra where username='$username'");
            $p2 = mysql_fetch_array ($p);
            $m = mysql_query("select * from tb_pelanggan where username='$username'");
            $m3 = mysql_fetch_array ($m);
            if (mysql_num_rows($a1) == 1) {
                $_SESSION['id_user'] = $a1['id_user'];
                $_SESSION['username'] = $a1['username'];
                $_SESSION['jenis'] = 'admin';
                header('location:view/home');
            }
        }
        else {
            echo "anda tidak terdaftar";
        }
    }
       /*      if (mysql_num_rows($a1) == 1) {
            $_SESSION['user_id'] = $r['id_user'];
            $_SESSION['username'] = $r['username'];
            $_SESSION['jenis'] = 'admin';
            $_SESSION['id_devisi']= $r['id_devisi'];
            header('location:operator/media.php');
        }
        elseif (mysql_num_rows($q2) == 1) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['level'] = 'Administrator';
            header('location:operator/media.php');
        }else {
            echo "Login Gagal";

    

 

        
        }*/
  function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
}
