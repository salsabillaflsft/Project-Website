<?php
    include "connect.php";
    $id_jenis=$_GET['id_jenis'];
    $query=mysqli_query($conn,"DELETE FROM jenis WHERE id_jenis=$id_jenis");
        if($query)
        {
            echo "Proses Hapus Berhasil, <a href='output_req.php'>Lihat Tabel</a>";
        }
        else
        {
            echo"Proses Hapus Gagal";
        }
?>