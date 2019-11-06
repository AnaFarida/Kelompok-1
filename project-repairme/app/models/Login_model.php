<?php
class Login_model{
	function cek ($username,$password){
		$query=$this->db->query("SELECT * FROM tb_user WHERE nama='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	

}