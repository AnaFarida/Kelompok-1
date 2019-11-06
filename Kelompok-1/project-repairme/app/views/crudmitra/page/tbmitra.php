<!DOCTYPE html>
<html>
<head>
	<title>CRUD MITRA</title>
</head>
<body>
	<table>
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>No Telepon</th>
			<th>Nama Usaha</th>
		</tr>
		<?php
			include('../class.crud.php');

			$crud = new Crud;
			$mitra = $crud->read_data('tb_mitra');
			$no = 1;

			foreach ($mitra as $mtr){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $mtr['nama']; ?></td>
					<td><?php echo $mtr['alamat']; ?></td>
					<td><?php echo $mtr['email']; ?></td>
					<td><?php echo $mtr['no_telepon']; ?></td>
					<td><?php echo $mtr['nama_usaha']; ?></td>
				</tr>
			<?php } ?>
		
	</table>
</body>
</html>