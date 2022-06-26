<?<php
//menampilkan header
include "template/header.php";
//melakukan ridirect jika bukan admin
if(!isset($_SESSION['user'])|$checkrole!=1){
    header("location:login.php");
}

?>

<div class="jumbroton jumbroton-fluid text-center">
    <div class="container">
        <h1 class="dispaly-4"> halo Selamat Datang! </h1>
    </div>
</div>