<?php
//mengkoneksikan database dari file config db_connect
include("template/config/db_connect.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="SELECT * FROM tabel_pelanggan WHERE username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($conn,$sql);

	$row=mysqli_fetch_array($result);

	if($row["role"]=="pelanggan")
	{	

		$_SESSION["username"]=$username;

		header("Location: pelanggan/dashboard.php");
	}

	elseif($row["role"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("Location: Admin/read.php");
	}

	else
	{
		echo "username or password incorrect";
	}

}




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
    
<div class="div-countainer-fluid">
    <div class="row">
        <div class="col S6 bg-grey">
            <img src="template/img/draw_brush.jpg" class="col S12" alt="image">
        </div>
    
        <div class="col S6" style="padding: 100px 65px 8px">
        <div class="container">
            <h4 class="my-6 text-center">Selamat Datang di F<span class="ur">ur</span>niture<span class="life">Life</span></h4>
                <p class="my-5">Silahkan masukkan username dan password</p>
                <form class="col s12" action="cek_login.php" methode="POST">
                    <div class="row mb-3">
                        <label class="col-2 col-from-label align-self-center">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" placeholder="username" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-2 col-from-label align-self-center">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="password" placeholder="password" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <input type="submit" class="btn brand z-depth-0" name="login" value="login">
                            <button type="button" class="btn brand-1 z-depth-0" onclick="window.history.back();">Sign Up</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    </div>
</div>

</body>
</html>
    






