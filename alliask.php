<!DOCTYPE html>
<html lang="en">
<head>
<title>Lipsync• Lyrics</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="./blk/assets/img/mic.png">
<link rel="stylesheet" type="text/css" href="./music/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="./music/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./music/styles/blog.css">
<link rel="stylesheet" type="text/css" href="./music/styles/blog_responsive.css">
</head>
<body>
 <?php
    include 'connection.php';
    $id_lyrics = $_GET['id_lyrics'];
    $query = mysqli_query($conn,"SELECT * from lyrics where id_lyrics=$id_lyrics");
    $data=mysqli_fetch_array($query);
        ?>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-center">

						<!-- Logo -->
						<div class="logo">
							<a href="#" class="d-flex flex-row align-items-end justify-content-start">
								<span class="logo_bars d-flex flex-row align-items-end justify-content-between"><span></span><span></span><span></span><span></span><span></span></span>
								<span class="logo_text">Lipsync•</span>
							</a>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="./index.php">Home</a></li>
								<li><a href="./artists.php">Artists</a></li>
								<li><a href="./lyrics.php">Lyrics</a></li>
							</ul>
						</nav>

						<!-- User area -->
						<div class="log_reg d-flex flex-row align-items-center justify-content-start">
							<ul class="d-flex flex-row align-items-start justify-content-start">
								<li><a href="./contact.php">Create Lyrics</a></li>
								<li><a href="./contact.php">Update</a></li>
							</ul>

							<!-- Hamburger -->
							<div class="hamburger d-flex flex-column align-items-end justify-content-between"><div></div><div></div><div></div></div>
						</div>
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
						<li><a href="./index.php">Home</a></li>
				        <li><a href="./artists.php">Artists</a></li>
						<li><a href="./lyrics.php">Lyrics</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="./music/images/blog.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">All I Ask - Adele</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts">
						
						<!-- Blog Post -->
						<div class="blog_post">
							<div class="row">
								
								<!-- Blog Post Image -->
								<div class="col-lg-7">
									<div class="blog_post_image"><img src="./music/images/adele1.jpg" alt=""></div>
								</div>

								<!-- Blog Post Content -->
								<div class="col-lg-5 blog_col">
									<div class="blog_post_content">
										<div class="blog_post_date"><a href="#"><?php echo "$row->release_date"   ;  ?></a></div>
										<div class="blog_post_title"><a href="#">Festival list for 2019</a></div>
										<div class="blog_post_info">
											<ul class="d-flex flex-row align-items-start justify-content-start">
												<li>By <a href="#"><?php echo "$row->writer"   ;  ?></a></li>
												<li>
													<ul class="d-flex flex-row align-items-start justify-content-start">
														<li><a href="#"><?php echo "$row->album"   ;  ?></a></li>
														<li><a href="#"><?php echo "$row->single"   ;  ?></a></li>
														<li><a href="#"><?php echo "$row->genre_name"   ;  ?></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="blog_post_text">
											<p><?php echo "$row->desc_lyrics"   ;  ?></p>
										</div>
										<div class="blog_post_link"><a href="#">read more</a></div>
									</div>
								</div>

							</div>
						</div>
						
						<!-- Page Nav -->
						<div class="page_nav">
							<ul class="d-flex flex-row align-items-start justify-content-start">
								<li class="active"><a href="#">01.</a></li>
								<li><a href="#">02.</a></li>
								<li><a href="#">03.</a></li>
								<li><a href="#">04.</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Featured News -->

	<div class="featured_news container_reset">
		<div class="container">
			<div class="row">
				
				<!-- Featured News Image -->
				<div class="col-xl-5">
					<div class="featured_news_image">
						<div class="background_image" style="background-image:url(./music/images/featured_news.jpg)"></div>
					</div>
				</div>

				<!-- Featured News Content -->
				<div class="col-xl-7">
					<div class="featured_news_content">
						<div class="featured_news_title">Featured News</div>
						<div class="blog_post_date"><a href="#">Oct 19, 2018</a></div>
						<div class="featured_blog_post_title"><a href="#">Music Seminary at Festival</a></div>
						<div class="featured_blog_post_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi condimentum, neque ac porttitor scelerisque, nisi nisl tincidunt enim, non aliquet diam neque sed urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget lorem luctus ligula volutpat fermentum. Nulla auctor odio sit amet dui lobortis aliquet. Donec leo eros, faucibus vitae finibus a, tincidunt vehicula eros. Morbi aliquet sem euismod venenatis elementum. Proin laoreet sapien sit amet posuere sollicitudin. Mauris quis faucibus velit.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">

				<!-- Newsletter Content -->
				<div class="col-xl-6">
					<div class="newsletter_content">
						<div class="section_title"><h1>Subscribe & Follow</h1></div>
						<div class="newsletter_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi condimentum, neque ac porttitor scelerisque.</p>
						</div>
					</div>
				</div>

				<!-- Newsletter Form -->
				<div class="col-xl-6 nl_col">
					<div class="newsletter_form_container d-flex flex-column align-items-start justify-content-end">
						<form action="#" class="newsletter_form" id="newsletter_form">
							<div class="d-flex flex-row align-items-start justify-content-between">
								<input type="email" class="newsletter_input" placeholder="Your E-mail" required="required">
								<button class="button newsletter_button"><span>subscribe</span></button>
							</div>
						</form>
					</div>
				</div>

			</div>
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
<script src="./music/js/blog.js"></script>
</body>
</html>