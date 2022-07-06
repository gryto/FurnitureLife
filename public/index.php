<?php
if($role = $_SESSION['role'] == 'pelanggan')
{                
    header("location:Admin/read.php");
} elseif ($role = $_SESSION['role'] == 'admin')
{
    header("location:pelanggan/dashboard.php");
} else{
    echo "
    <script>
    alert('Username atau password yang anda masukkan salah')
    document.location.href = 'login.php'
    </script>
    ";
}
?>