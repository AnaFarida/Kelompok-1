<?php 

class koneksi
{
	private $host = 'localhost';
	private $user = 'root';
	private $pass = '';
	private $db = 'repairme';

	protected $conn;

	function_construct()
	{
		if(!isset($this->conn))
		{
			$this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
		}

		if(!$this->conn)
		{
			echo 'Koneksi Gagal';
		}
		//else
		//{
		//echo 'Koneksi Berhasil';
		//}
		return $this->conn;
	}
}


 ?>
