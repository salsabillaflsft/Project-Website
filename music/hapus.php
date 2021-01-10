<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($conn, "DELETE FROM data_diri where id=$id") or die(mysqli_error($conn));
    if($query)
    {
        echo "Proses hapus berhasil, ingin lihat hasil? <a href = 'tampil.php'> disini</a>";
    }
    else
    {
        echo "Proses hapus gagal";
    }
?>