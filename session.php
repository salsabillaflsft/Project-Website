<?php 
session_start();
if (empty($_SESSION['email'])) {
	header("location:contact.php?pesan=belum_login");
}
?>
<html>
<head>
	<title>halaman session</title>
</head>
<body>
	<?php
	echo $_SESSION['email'];
	?>
	<br>
    <a href="input.php">masuk</a>
	<a href="./logout.php">logout</a>
</body>
</html>