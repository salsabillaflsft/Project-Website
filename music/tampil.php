<html>
    <head><title>LULU LALU</title></head>
    <body>
        <table border=1>
            <tr>
            <td> Nama </td>
            <td> Alamat </td>
            <td> No. Tlp </td>
            </tr>
            <?php
            include 'koneksi.php';  //wajib dicantumkan untuk terhubung
            $query=mysqli_query($conn,"select * from data_diri");       //mysqli_query($conn ... baru perintahnya)  wajib bray
            while($data=mysqli_fetch_array($query))         //mengubah variabel query jadi array || variabel di <td>harus sama di dalem while
            { ?>
                <tr>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['alamat'];?></td>
                <td><?php echo $data['no_tlp'];?></td>
                    <td><a href=hapus.php?id=<?php echo $data['id'];?>>Hapus</a></td>
                </tr>
            <?php }?>
        </table>
    </body>
</html>