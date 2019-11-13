<?php
session_start()
if (isset($_COOKIE['Login'])) {
       if ($_COOKIE['Login'] == 'true') {
              $_SESSION['Login'] = true;
       }
}

if (isset($_SESSION['Login'])) {
       header('Location:views/login/index.php');
}

require('function.php');

if(isset($_POST['Login'])){
$username = $_POST['username'];
$password = $_POST['password'];


$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");	

if (mysqli_num_rows($result) == 1) {
       //cek password
       $row = mysqli_fetch_assoc($result);
       if (password_verify($password, $row['password'])){
              //set session
              $_SESSION['Login'] = true;

              if (isset($_POST['remember'])) {
                     setcookie('Login', 'true', time() + 20);
              }

              header("Location:views/login/index.php");
              exit;
       }
}

$error = true;


}
?>