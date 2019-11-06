<?php 
include('class.koneksi.php');

class crud extends Koneksi
{
	function_construct()
	{
		parent::_construct();
	}

	public function read_data($table))
	{
		$query = "SELECT * FROM $table";

		$hasil = $this->conn->query($query)

		if(!$hasil)
		{
			return "Terjadi kesalahan di query";
		}

		$rows = array();
		while($row = $hasil->fetch_assoc())
		{
			$rows[] = $row;
		}
		return $rows;
	}

	public function simpan_data(){}
	public function update_data(){}
	public function delete_data(){}
}
 ?>
