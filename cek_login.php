<?php
session_start();

$query=new mysqli('localhost','root','','musik');
$email = $_POST['email'];
$password = md5($_POST['password']);
$data = mysqli_query($query, "select * from user where email = '$email' and password = '$password'")or die (mysqli_error($query));
$cek = mysqli_num_rows($data);
if ($cek > 0) {
	$_SESSION ['email'] = $email;
	$_SESSION ['status'] = "login";
	header("location:input.php");
} 
else { header("location:contact.php?pesan=gagal");}
?>