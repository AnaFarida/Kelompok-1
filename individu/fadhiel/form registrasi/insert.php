<?php 
	date_default_timezone_set('Asia/Jakarta');
	if(isset($_POST['submit'])){
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$telp=$_POST['telp'];
		$alamat=$_POST['alamat'];
 
		$insert = "INSERT INTO tamu values('','$nama','$email','$telp','$alamat')";
		$q_insert = mysql_query($insert) or die(mysql_error());
 
	}
 ?>
 
 <script type="text/javascript" language="Javascript">
 	alert('DATA BERHASIL DISIMPAN');
 	document.location.href="index.php?webprog=form";
 </script>