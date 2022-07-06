<?php
//mengkoneksikan database dari file config db_connect
include("template/config/db_connect.php");

$username =  $password = $role ='';

//jika ada inputan yang eror
$errors = array('username'=>'','password'=>'');

if(isset($_POST["login"]))
{
	$user =$_POST["username"];
	$pass =$_POST["password"];

//======================================================================================

    // menyeleksi data user dengan username dan password yang sesuai
    $data_user = mysqli_query($conn,"SELECT * FROM tabel_pelanggan WHERE username='$user' AND password='$pass'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_fetch_array($data_user);

    $username = $cek['username'];
    $password = $cek['password'];
    $role = $cek['role'];

    if($user == $username && $pass = $password){
        $_SESSION['role'] = $role;
        header("location:index.php");
    } else {
        echo 'sorry';
    }



    // cek apakah username dan password di temukan pada database

    /*
    if($cek > 0){

        $sql = mysqli_fetch_all($row);
    
        // cek jika user login sebagai admin
        if($sql['role']=="admin"){
    
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:Admin/read.php");
    
        // cek jika user login sebagai pegawai
        }else if($sql['role']=="pelanggan"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "pelanggan";
        // alihkan ke halaman dashboard pegawai
        header("location:pelanggan/dashboard.php");
    
        }else{
    
        // alihkan ke halaman login kembali
        header("location:index.php?pesan=gagal");
        } 
    }else{
        header("location:index.php?pesan=gagal");
    }
    

//=========================================================================================

/*
    $sql= "SELECT * FROM tabel_pelanggan WHERE username ='$username' AND password = '$password' ";

    $result=mysqli_query($conn,$sql);

	$tabel_pelanggan=mysqli_fetch_all($result);

	if($tabel_pelanggan["role"]=="pelanggan")
	{	

        echo "
        <script>
        alert('Login telah berhasil, pelanggan')
        document.location.href = 'pelanggan/dashboard.php'
        </script>
        ";
	}

	elseif($tabel_pelanggan["role"]=="admin")
	{

        echo "
        <script>
        alert('Login telah berhasil, admin')
        document.location.href = 'Admin/read.php'
        </script>
        ";
	}

	else
	{
        echo "
        <script>
        alert('Username atau password yang anda masukkan salah')
        document.location.href = 'login.php'
        </script>
        ";
	}
*/


}

?>
