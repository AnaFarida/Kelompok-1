<?php 

class mySession{
	public static function setSession($pesan, $jenis, $data){
		$_SESSION['login'] = [
			'pesan' => $pesan,
			'jenis' => $jenis,
			'data' => $data
			
		];

	}

	public static function getSession(){
		if (isset($_SESSION['login'])) {
			return $_SESSION['login'];
		}
	}


	public static function sessionLogin(){
		if (isset($_SESSION['login'])) {
			if ($_SESSION['login']['pesan'] == 'true') {
				if ($_SESSION['login']['jenis'] == 'mitra') {
					echo '<li><a href="'.BASEURL.'/login/logout">LOGOUT MITRA</a></li>';

				}else if($_SESSION['login']['jenis'] == 'admin'){
					echo '<li><a href="'.BASEURL.'/login/logout">LOGOUT ADMIN</a></li>';
				}else if($_SESSION['login']['jenis'] == 'pelanggan'){
					echo '<li><a href="'.BASEURL.'/login/logout">LOGOUT PELANGGAN</a></li>';
				}
			}
		}
	}

	public static function perbaikanSession($pesan, $data, $barang){
		$_SESSION['perbaikan'] = ['pesan' => $pesan, 'mitra' => $data, 'barang' => $barang];
	}

	

	}
