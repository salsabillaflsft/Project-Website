<?php
    include "connect.php";
    $id_lyrics=$_POST['id_lyrics']; 
    $desc_lyrics=$_POST['desc_lyrics']; 
    $query=mysqli_query($conn,"UPDATE lyrics SET desc_lyrics='$desc_lyrics' WHERE lyrics=$id_lyrics") or die(mysqli_error($conn));
        if($query)
        {
            echo "Proses Update Berhasil, <a href='./artists.php'>Lihat Lyrics</a>";
        }
        else
        {
            echo"Proses Update Gagal";
        }
?>