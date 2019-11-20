<?php
$server="localhost";
$user="root";
$password="";
$database="db_repairme";

mysql_connect($server,$user,$password)or die ("Tidak Konek");
mysql_select_db($database) or die ("Gagal Koneksi Ke Database");

?>