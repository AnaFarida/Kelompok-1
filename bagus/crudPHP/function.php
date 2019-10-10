<?php 
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');

function query($query){

	//memanggil variable $conn karena function terkena scope
	global $conn;
	//membuat variable $result untuk menampung mysqli_query
	$result = mysqli_query($conn,$query);
	//membuat array kosong untuk menampung data dari database
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;

}