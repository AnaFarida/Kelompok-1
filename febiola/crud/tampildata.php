<?php 
require('koneksi.php');
$mhs = query ("SELECT * FROM biodata ;")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <table border="1" cellpadding="10" cellspacing="0">
 <tr>
 <th>id</th>
 <th >nim</th>
 <th >nama</th>
 <th >prodi</th>
 <th >alamat</th>
 <th >foto</th>
 </tr>
 <tr>
<?php foreach($mhs as $kel) : ?>
    <td><?= $kel['id'] ?></td>
    <td><?= $kel['nim'] ?></td>
    <td><?= $kel['nama'] ?></td>
    <td><?= $kel['prodi'] ?></td>
    <td><?= $kel['alamat'] ?></td>
    <td><?= $kel['foto'] ?></td>
<?php endforeach;?>
 </tr>
 </table>   
</body>
</html>