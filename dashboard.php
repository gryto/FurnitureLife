<?<php
//menampilkan header
include "template/header.php";
//melakukan ridirect jika bukan admin
if(!isset($_SESSION['user'])|$checkrole!=1){
   header("location:login.php");
}

?>

<!DOCTYPE html>
<html>

    <div class="jumbroton jumbroton-fluid text-center">
        <div class="container">
            <h1 class="display-4"> Halo, Selamat Datang! </h1>
            </h1>
        </div>
    </div>

    </body>
</html>
