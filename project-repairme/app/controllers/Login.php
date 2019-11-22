<?php
class Login extends Controller{
 
    function index(){
        $this->view('templates/header');
        $this->view('login/index');
        $this->view('templates/footer');
    }
}
