<?php
//mengkoneksikan database dari file config db_connect
include("template/config/db_connect.php");

//menentukan variabel untu nama_produk, deskripsi_produk, dan harga_produk pada kode php di html supaya data input menetap dalam form
$username = $password =  '';
//jika ada inputan yang eror
$errors = array('username'=>'','password'=>'');
 
$checkRole = '';

$checkRole !=0 ? header('Location: dashboard.php') : '';


?>

<link rel="stylesheet" href="template/css/style.css">

<style type="text/css">
        .brand{
            background: #0F0F0F !important;
        }
        .brand-1{
            color: #0f0f0f !important;
            background-color: #FFFFFF !important;
            border: 1px solid transparent;
            border-color: #0f0f0f !important;
        }
        .brand-text{
            color: #0F0F0F !important;
        }
        .life{
            color: #4db6ac !important;
        }
        .ur{
            color: #f7b71e !important;
        }
    </style>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        

	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
    

    
<div class="div-countainer-fluid">
    <div class="row">
        <div class="col S6 bg-grey">
            <img src="template/img/draw_brush.jpg" class="col S12" alt="image">
        </div>
    
        <div class="col S6" style="padding: 100px 65px 8px">
        <div class="container">
            <h4 class="my-6 text-center">Selamat Datang di F<span class="ur">ur</span>niture<span class="life">Life</span></h4>
                <p class="my-5">Silahkan masukkan username dan password</p>
                <form class="col s12" methode="post" action="login_cache_salah.php">
                    <div class="row mb-3">
                        <label class="col-2 col-from-label align-self-center">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" placeholder="username">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-2 col-from-label align-self-center">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="password" placeholder="password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <input type="submit" class="btn brand z-depth-0" name="submit" value="login">
                            <button type="button" class="btn brand-1 z-depth-0" onclick="window.history.back();">Batal</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    </div>
</div>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>

</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        //melakukan definisi variabel
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Membuat query untuk semua informasi produk
        //$sql = 'SELECT username, password, role, ID_pelanggan FROM tabel_pelanggan';

        //Untuk membuat query dan mendapatkan hasil
        $mysqli_query = mysqli_query($conn, $sql);

        //fetching hasil dari baris sebagai array
        //$tabel_pelanggan = mysqli_fetch_all($mysqli_query, MYSQLI_ASSOC);

        $sql = "SELECT * FROM tabel_pelanggan WHERE username= '$username' && password = '$password'";

        //ekseskusi pada query
        $mysqli_query =$conn->query($query);
        //hasil query dalam bentuk array
        $sql = mysqli_fetch_array($mysqli_query);
        
        if($sql) {
            //Melakukan setting pada session
            $utils->setRole($sql);
            //Mengecek role pada utils
            $chekRole = $utils->checkRole();
            //jika admin
            if($checkRole == 1) {
                //Menampilkan notifikasi 
                echo "<script type='text/javascript'> alert('Login telah berhasil, admin'); window.location.herf='dashboard.php'; </script>";
            } else {
                //Menampilkan notifikasi pelanggan
                echo "<script type='text/javascript'> alert('Login telah berhasil, pelanggan'); window.location.herf='index.php'; </script>";
            } 
        }
            
            else {
                //Menampilkan notifikasi gagal login
                echo "<script type='text/javascript'> alert('Anda gagal login'); </script>";
            }
        
    }
    ?>