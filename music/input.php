<?php
include "koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];

$query = mysqli_query($conn, "insert into data_diri Values('', '$nama', '$alamat', '$no_tlp')")
    or die(mysqli_error($conn));
//$conn harus sama, jika database tidak terbaca padahal kode suda betul semua, ambil $hostname-$query di koneksi lalu copykan di bawah $no_tlp
if($query)
{
    echo "proses input berhasil";
}else
{
    echo "Upss.. coba lagi";
}