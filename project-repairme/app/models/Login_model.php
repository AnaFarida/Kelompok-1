<?php
class Login_model{
    private $db;
    

    function __construct(){
        $this->db = new Database;
    }

    function proses($data){
        $username = $data['username'];
        $password = $data['password'];
        return $this->db->data("SELECT * FROM tb_user WHERE username = '$username'");

    if (mysqli_num_rows($this->db->data($ana)) == 1)
     {
        echo "<script>header('Location:BASEURL/home')</script>";
     }
     else {
        echo "<script>header('Location:BASEURL/mitra')</script>";
     }
}
}
        //cek password
        //$row = mysqli_fetch_assoc($result);
//         if (password_verify($password, $row['password'])){
//             //set session
//             $_SESSION['login'] = true;

//             if (isset($_POST['remember'])) {
//                 setcookie('login', 'true', time() + 20);
//             }

//             header("Location: index.php");
//             exit;
//         }
//     }

//     $error = true;


// }
//         }
        	
//     }
// }