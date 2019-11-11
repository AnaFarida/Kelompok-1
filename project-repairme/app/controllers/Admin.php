<?php
class Admin extends Controller{
	public function index(){
		$this->view('templates/headerAdmin');
		$this->view('admin/index');
		$this->view('templates/footerAdmin');
	}
}