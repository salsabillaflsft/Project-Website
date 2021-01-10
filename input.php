<?php 
    session_start();
    include "connect.php";
    if (empty($_SESSION['email'])) {
        header("location:loginuser.php?pesan=belum_login");
    }
?>
<html lang="en">
<head>
<title>Lipsync• Requests</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="./blk/assets/img/mic.png">
<link rel="stylesheet" type="text/css" href="./music/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="./music/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./music/styles/contact.css">
<link rel="stylesheet" type="text/css" href="./music/styles/contact_responsive.css">
</head>
<body>
    <?php
	echo $_SESSION['username'];
	?>
	<br>
	

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-center">

						<!-- Logo -->
						<div class="logo">
							<a href="./index.php" class="d-flex flex-row align-items-end justify-content-start">
								<span class="logo_bars d-flex flex-row align-items-end justify-content-between"><span></span><span></span><span></span><span></span><span></span></span>
								<span class="logo_text">Lipsync•</span>
							</a>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="./contact_home.php">Home</a></li>
								<li><a href="./login_artists.php">Artists</a></li>
								<li><a href="./login_lyrics.php">Lyrics</a></li>
                                <li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>


							<!-- Hamburger -->
							<div class="hamburger d-flex flex-column align-items-end justify-content-between"><div></div><div></div><div></div></div>
						
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_container">
			<div class="menu_background"></div>
			<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="menu_content d-flex flex-column align-items-center justify-content-start">
				<nav class="menu_nav">
					<ul class="d-flex flex-column align-items-center justify-content-start">
						<li><a href="./contact_home.php">Home</a></li>
				        <li><a href="./login_artists.php">Artists</a></li>
						<li><a href="./login_lyrics.php">Lyrics</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="./music/images/contact.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">BE THE PART OF US!</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Content -->
				<div class="col-lg-5">
					<div class="contact_content">
						<div class="contact_title">Get in touch</div>
						<div class="contact_text">
							<p>Need another Lyrics? Please, request Us!</p>
						</div>
						<div class="contact_list">
							<ul>
								<li><span> </span> </li>
								<li><span> </span> </li>
								<li><span> </span> </li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
                <?php
            include 'connect.php';
            $query=mysqli_query($conn,"select * from jenis left join artist on artist.id_artist=jenis.id_artist");
                    ?>
				<div class="col-lg-6 offset-lg-1 contact_col">
					<div class="contact_form_container">
						<form method="POST" action="masuk.php" class="contact_form" id="contact_form">
                            <div><div class="row">
                                Artist Name        <select name=id_artist class="contact_input">
                                <option value="id_song" >Artist Name</option>
                                <?php
                                while($data=mysqli_fetch_array($query))
                                { ?>
                                <option value="<?php echo $data['id_artist']; ?>"><?php echo $data['artist_name']; ?></option>
                                <?php } ?>
                                </select></div>
                            </div>
                            <div><input type="text" class="contact_input" name="album" placeholder="album"></div>
                            <div><input type="text" class="contact_input" name="single" placeholder="single"></div>
							<input type="submit" value="SEND REQUEST" class="button contact_form_button"><span></span>
                            
						</form>
					</div>
				</div>

                
			</div>
		</div>
	</div>

	<!-- Contact Map -->

	<div class="contact_map">

		<!-- Google Map -->
		
		<div class="map">
            <br><br><br>
			  <img src="./Hits2019.png" style="width:1200px;height:780px;">
		</div>

	</div>

	
	<!-- Footer -->

	<footer class="footer">
		<div class="background_image" style="background-image:url(./music/images/footer.jpg)"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">
					<div class="col text-center">

						<!-- Logo -->
						<div class="logo">
							<a href="#" class="d-flex flex-row align-items-end justify-content-start">
								<span class="logo_bars d-flex flex-row align-items-end justify-content-between"><span></span><span></span><span></span><span></span><span></span></span>
								<span class="logo_text">Lipsync•</span>
							</a>
						</div>

						<!-- Footer Social -->
						<div class="footer_social">
							<ul class="d-flex flex-row align-items-center justify-content-center">
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
			</div>
		</div>
			
	</footer>
</div>

<script src="./music/js/jquery-3.3.1.min.js"></script>
<script src="./music/styles/bootstrap-4.1.2/popper.js"></script>
<script src="./music/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="./music/plugins/greensock/TweenMax.min.js"></script>
<script src="./music/plugins/greensock/TimelineMax.min.js"></script>
<script src="./music/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="./music/plugins/greensock/animation.gsap.min.js"></script>
<script src="./music/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="./music/plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="./music/plugins/jPlayer/jplayer.playlist.min.js"></script>
<script src="./music/plugins/easing/easing.js"></script>
<script src="./music/plugins/progressbar/progressbar.min.js"></script>
<script src="./music/plugins/parallax-js-master/parallax.min.js"></script>
<script src="./music/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="./music/js/contact.js"></script>
</body>
</html>