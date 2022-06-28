<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include("template/config/db_connect.php");

//menentukan variabel untu nama_produk, deskripsi_produk, dan harga_produk pada kode php di html supaya data input menetap dalam form
$username = $password =  '';
//jika ada inputan yang eror
$errors = array('username'=>'','password'=>'');
 
// menangkap data yang dikirim dari form
//$username = $_POST['username'];
//$password = $_POST['password'];

//untuk mendapatkan data yang diinput
if(isset($_POST['submit'])){
    //htmlspecialcharacter untuk menjaga dari malicious attack

    //Memeriksa username
    if(empty($_POST['username'])){
        $errors['username'] = 'Masukkan username anda<br />';
    } else{
        $nama_produk = $_POST['username'];
        if(!preg_match('/^[a-zA-Z]+$/', $nama_produk)){
            $errors['username'] = 'Username harus berupa kalimat tanpa spasi';
        }
    }

    //Memeriksa password
    if(empty($_POST['password'])){
        $errors['password'] = 'Masukkan password anda<br />';
    } else{
        $nama_produk = $_POST['password'];
        if(!preg_match('/^[a-zA-Z]+$/', $password)){
            $errors['password'] = 'Password harus mengandung setidaknya 1 karakter alfabet huruf kecil';
        }
    }
}
 
// menyeleksi data admin dengan username dan password yang sesuai
$sql = "SELECT * FROM tabel_pelanggan WHERE username= '$username' && password = '$password'";

// menghitung jumlah data yang ditemukan
$mysqli_query = mysqli_num_rows($sql);

//menyimpan ke database dan mengecek
if(mysqli_query($conn, $sql)){
    //sukses
    header('Location: dashboard.php');
    echo "<script type='text/javascript'> alert('Login telah berhasil, admin'); window.location.herf='dashboard.php'; </script>";
} else {
    //error
    header("location:index.php?pesan=gagal");
    echo "<script type='text/javascript'> alert('Login telah berhasil, pelanggan'); window.location.herf='index.php'; </script>";
}

?>
 