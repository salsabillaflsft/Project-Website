<?php
    include "koneksi.php";

    $id_lyrics=$_POST['id_lyrics'];
    $lab = $_POST['lab'];
    $hari = $_POST['hari'];
    $waktu = $_POST['waktu'];

    $query=mysqli_query($konek, "UPDATE jadwal_mengajar SET id_asisten='$id_asisten', lab = '$lab', hari='$hari', waktu='$waktu' WHERE id_jadwal='$id_jadwal'") or die(mysqli_error($konek));
if($query)
{
     echo "Proses update berhasil, ingin lihat hasil? <a href = 'tampil.php'> disini</a>";
}
else
{
    echo "Proses update gagal";
}
?>