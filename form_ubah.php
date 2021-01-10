<?php 
session_start();
if (empty($_SESSION['username'])) {
	header("location:formlogin.php?pesan=belum_login");
}
?>
<html>
<head>
    <title>Ubah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
body {
  background-image: url('bg4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
     <?php
        echo "Hai! ";
	echo $_SESSION['username'];
	?>
     <br>
	<a href="./logout.php">logout</a>
    <?php
    include 'koneksi.php';
    $id_jadwal=$_GET['id_jadwal'];
    $query=mysqli_query($konek, "SELECT * FROM jadwal_mengajar INNER JOIN data_asisten on data_asisten.id_asisten = jadwal_mengajar.id_asisten WHERE id_jadwal='$id_jadwal'")or die(mysqli_error($konek));
    
    $data=mysqli_fetch_array($query);
        ?>
    <div class="container">
    <form method="POST" action="update.php">
       <table>
        <?php
         include 'koneksi.php';
            $query=mysqli_query($konek,"select * from data_asisten");
            ?>
        <div class="form-group">
        <input type="hidden" name="id" value="<?= $id_jadwal ?>">
        </div>
         <div class="form-group">
            <label for="nama">Nama Asisten:</label>   
            <select name="nama"><?php  while($data=mysqli_fetch_array($query)) { ?>
                            <option value="<?php echo $data['id_asisten']; ?>"><?php echo $data['nama_asisten']; ?></option>
                        <?php }?>
                </select>
           </div>
        <br>
         <div class="form-group">
             <label for="lab">Nama Laboratorium </label>
             <select name="lab" value="<?php echo $data['lab']; ?>">
                            <option value="jaringan">Lab Jaringan</option>
                            <option value="komputasi">Lab Komputasi</option>
                            <option value="basisdata">Lab Basis Data</option>
            </select>
           </div>
             <br>
            <div class="form-group">
       <label for="hari">Hari </label> 
                <select name="hari" value="<?php echo $data['hari']; ?>">
                            <option value="senin">Senin</option>
                            <option value="selasa">Selasa</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jumat">Jumat</option>
                        </select>
           </div>
           <br>
            <div class="form-group">
                <label for="waktu">Waktu </label>
                <select name="waktu" value="<?php echo $data['waktu']; ?>">
                            <option value="1">08.00 - 10.00</option>
                            <option value="2">10.30 - 12.30</option>
                            <option value="3">13.00 - 15.00</option>
                        </select>
           </div>
                <br>
        <input type="submit" name="submit" value="kirim">
        </table>  
    </form>
        <h5>Kembali ke main site? Klik <a href="tampil.php">ini</a></h5>
    </div>
</body>
</html>