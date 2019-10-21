+<?php 

$programstudi = $_POST['programstudi'];
$motivasi = $_POST['motivasi'];
echo " programstudi:". $programstudi;
echo "<br>";
echo "motivasi:". $motivasi;
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

<br>
<?php
//menyisipkan file tes.php di sini
include('getPost1.php');

//syntax di bawah adalah isi dari file index.php
echo "Belajar include dan require di www.malasngoding.com";
?>
<br>
    
</body>
</html>