<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $database="data_tamu";

    $conn= new mysqli($hostname, $username, $password,$database);

if($conn->connect_error)
{
    //jika error, proses dimatikan dgn die() atau exit();
    die('maaf koneksi gagal :'. $connect->error);
}
?>