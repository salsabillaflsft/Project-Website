<?php
    include "connect.php";
$id="";
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$query=mysqli_query($conn,"insert into user values(NULL,'$name','$email','$password')") or die(mysqli_error($conn));

if($query)
{
    echo "Proses input berhasil, kembali login <a href='contact.php'> disini</a>";
}
else
{
    echo "proses input gagal";
}
?>
