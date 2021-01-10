<?php
        include 'connect.php';
        $album=$_POST['album']; 
        $single=$_POST['single']; 
        $query=mysqli_query($conn,"INSERT INTO jenis VALUES('','','$album','$single')") or die(mysqli_error($conn));
        if($query)
        {
            echo "Request berhasil, <a href='input.php'>Lanjut Request Disini</a>";
        }
        else
        {
            echo "Request gagal";
        }
           
                    
                    
?>