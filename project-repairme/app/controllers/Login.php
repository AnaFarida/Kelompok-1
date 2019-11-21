<?php
class Login extends Controller{
 
    function index(){
        $this->view('templates/head');
        $this->view('login/index');
        $this->view('templates/foot');
    }
}
