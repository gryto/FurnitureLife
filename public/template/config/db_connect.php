<?php

//Menghubungkan database
$conn = mysqli_connect('localhost', 'ani', 'Harrypotter123@', 'furniturelife') or die(mysqli_error());

session_start();
//mengecek koneksi
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>