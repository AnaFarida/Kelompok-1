<?php 

class mySession{
	public static function setSession($pesan, $jenis){
		$_SESSION['login'] = [
			'pesan' => $pesan,
			'jenis' => $jenis
		];

	}

	public static function sessionLogin(){
		// if (isset($_SESSION['login'])) {
		// 	if ($_SESSION['login']['pesan'] == 'true' && $$_SESSION['login']['jenis'] == 'mitra') {
		// 		echo '<li><a href="'.BASEURL.'/login/logout">LOGOUT Mitra</a></li>';
		// 	}else if ($_SESSION['login']['pesan'] == 'true' && $$_SESSION['login']['jenis'] == 'pelanggan') {
		// 		echo '<li><a href="'.BASEURL.'/login/logout">LOGOUT pelanggan</a></li>';
		// 	}
		// }
	
		if (isset($_SESSION['login'])) {
			if ($_SESSION['login']['pesan'] == 'true') {
				echo '<li><a href="'.BASEURL.'/login/logout">LOGOUT Mitra</a></li>';
		}
		}
	}
	}
