<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $database="musik";
    $conn = mysqli_connect($hostname,$username,$password,$database);
   
  //$conn=new mysqli($hostname, $username, $password, $database);

    if($conn->connect_error)
    {
        die('Maaf koneksi gagal:'.$connect->connect_error);
    }
?>