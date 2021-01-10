<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Music template project">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./blk/assets/img/mic.png">
    <link rel="icon" type="image/png" href="./blk/assets/img/mic.png">
    <link rel="stylesheet" type="text/css" href="./music/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="./music/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./music/plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./music/plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="./music/./music/plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="./music/plugins/OwlCarousel2-2.3.4/animate.css">
    <link rel="stylesheet" type="text/css" href="./music/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="./music/styles/responsive.css">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    
    <!-- Nucleo Icons -->
    <link href="./blk/assets/css/nucleo-icons.css" rel="stylesheet" />
    
    <!-- CSS Files -->
    <link href="./blk/assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
    
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./blk/assets/demo/demo.css" rel="stylesheet" />
    <title>
    Lipsync• Brings Your Mouth Said The Correct Lyrics
    </title>
</head>
    
<body>
    <?php
	echo $_SESSION['email'];
	?>
	<br>
    <a href="./homelogout.php">masuk</a>
	<a href="./logout.php">logout</a>
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
								<li class="active"><a href="./index.php">Home</a></li>
								<li><a href="./artists.php">Artists</a></li>
								<li><a href="./lirik.php">Lyrics</a></li>
							</ul>
						</nav>

						<!-- User area -->
						<div class="log_reg d-flex flex-row align-items-center justify-content-start">
							<ul class="d-flex flex-row align-items-start justify-content-start">
								<li><a href="./contact.php">Log In</a></li>
								<li><a href="./contact.php">Register</a></li>
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
						<li><a href="./lirik.php">Lyrics</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="slide">
                    <div class="index-page page-header">
					<div class="background_image">
                    <div class="index-page squares square1"></div>
                    <div class="index-page squares square2"></div>
                    <div class="index-page squares square3"></div>
                    <div class="index-page squares square4"></div>
                    <div class="index-page squares square5"></div>
                    <div class="index-page squares square6"></div>
                    <div class="index-page squares square7"></div>
                    </div>
                    </div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_title_container text-center">
											<div class="home_title islive text-center"><h1>Lip <span>Sync•</span></h1></div>
                                            <h3 id="home_title h3">Helping You To Sing Correctly</h3>
										</div>
										<div class="tickets_form_container">
										</div> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>


			

			<!-- Scroll Down -->
			<div class="scroll_down scroll_down_link" data-scroll-to=".tours">
				<a href="#"></a>
				<div class="d-flex flex-row align-items-center justify-content-start">
					<div>scroll down</div>
					<div class="scroll_arrows d-flex flex-column align-items-start justify-content-start">
						<img src="./music/images/arrow_down.png" alt="">
						<img src="./music/images/arrow_down.png" alt="">
					</div>
				</div>
			</div>

		</div>
	</div>


    <!-- Song -->
    <!--<div class="songs_container">-->
	<div class="song">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="./music/images/song.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="song_content">

						<!-- Player -->
						  <div class="single_player_container">
								<div class="single_player">
									<div class="jp-jplayer jplayer" data-title="Hard Place" data-artist="H.E.R" data-ancestor=".jp_container_1" data-url="./music/files/HER-HardPlace.mp3"></div>
									<div class="jp-audio jp_container_1" role="application" aria-label="media player">
										<div class="jp-gui jp-interface single_player_inner d-flex flex-row align-items-center justify-content-start">

										<!-- Player Controls -->
										<div class="player_controls_box d-flex flex-row align-items-start justify-content-start">
											<div class="order-lg-1 order-2">
												<div class="player_title">song of the week</div>
												<div class="jp-controls-holder player_controls ml-auto d-flex flex-row align-items-start justify-content-start">
													<button class="jp-play player_button" tabindex="0"></button>
													<button class="jp-stop player_button" tabindex="0"></button>
												</div>
											</div>
											<div class="song_image ml-lg-auto order-lg-2 order-1"><img src="./music/images/hard-place-HER.jpg" alt=""></div>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars d-flex flex-row align-items-start justify-content-start">
											<div class="player_progress_box">
												<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
												<div class="song_info">
													<div class="jp-artist" aria-label="title">H.E.R</div>
													<div class="jp-title" aria-label="title"></div>
												</div>
												<div class="jp-progress">
													<div class="jp-seek-bar">
														<div>
															<div class="jp-play-bar"><span></span></div>
														</div>
													</div>
												</div>
												<div class="jp-duration ml-auto" role="timer" aria-label="duration">02:33</div>
											</div>

											<!-- Volume Controls -->
											<div class="jp-volume-controls ml-lg-auto">
												<div class="mute_button">
													<button class="jp-mute" tabindex="0"></button>
												</div>
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div class="jp-volume-bar">
														<div>
															<div class="jp-volume-bar-value"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Tours -->

	<div class="tours">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- Add -->
				<div class="col-lg-4 order-lg-1 order-2 tours_col">
					<div class="extra d-flex flex-column align-items-center justify-content-between">
						<div class="background_image" style="background-image:url(./music/images/maliq.jpeg)"></div>
						<div class="extra_frame"></div>
						<div class="extra_text"></div>
						<div class="extra_title_container">
							<div class="extra_year">2019</div>
							<div class="extra_title">widelanes</div>
							<div class="extra_subtitle">desember 2019</div>
						</div>
						<div class="button extra_button"><a href="https://tiketapasaja.com/event/widelanes-the-greatest-hits-maliq-dessential">get your tickets</a></div>
					</div>
				</div>

				<!-- Tours Content -->
				<div class="col-lg-8 order-lg-2 order-1">
					<div class="tours_content">
						<div class="section_title"><h1>Tour Dates</h1></div>
						<div class="tours_list_container">
							<ul class="tours_list">

								<!-- Tour -->
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div class="tour_info">
										<div class="tour_date">Sat, 30 Nov 2019</div>
										<div class="tour_name"><a href="#">Etela Festival</a></div>
										<div class="tour_location">Jakarta, GBK Senayan</div>
									</div>
									<div class="button tour_button ml-auto"><a href="https://tiketapasaja.com/event/etela-festival">get your tickets</a></div>
								</li>

								<!-- Tour -->
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div class="tour_info">
										<div class="tour_date">Sun, 22 Des 2019</div>
										<div class="tour_name"><a href="#">Now Playing</a></div>
										<div class="tour_location">Bandung, Lap. Pussenif</div>
									</div>
									<div class="button tour_button ml-auto"><a href="https://tiketapasaja.com/event/now-playing-festival">get your tickets</a></div>
								</li>

								<!-- Tour -->
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div class="tour_info">
										<div class="tour_date">Mon, 23 Des 2019</div>
										<div class="tour_name"><a href="#">The Journey of ICE</a></div>
										<div class="tour_location">Jakarta, ICE BSD Hall 5</div>
									</div>
									<div class="button tour_button ml-auto"><a href="https://tiketapasaja.com/event/journey-of-ice-br-write-your-journey-with-rendy-pandugo-feat-ardhito-pramono">get your tickets</a></div>
								</li>

								<!-- Tour -->
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div class="tour_info">
										<div class="tour_date">Sun, 29 Des 2019</div>
										<div class="tour_name"><a href="#">The Journey of ICE</a></div>
										<div class="tour_location">Jakarta, ICE BSD Hall 5</div>
									</div>
									<div class="button tour_button ml-auto"><a href="https://tiketapasaja.com/event/journey-of-ice-br-loving-your-life-with-glenn-fredly">get your tickets</a></div>
								</li>

							</ul>
						</div>
						<div class="tours_link"><a href="https://www.loket.com/category/concert">See All Event Dates</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- App -->

	<div class="app">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- App Image -->
				<div class="col-lg-6 order-lg-1 order-2 app_col">
					<div class="app_image">
						<img src="./music/images/app.jpg" alt="">
					</div>
				</div>

				<!-- App Content -->
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="app_content d-flex flex-column align-items-start justify-content-center">
						<div class="section_title"><h1 style="color:salmon">Get Your Music Right Now!</h1></div>
						<div class="app_text">
							<p style="color:black">Hits demi hits
hadir di sini.<br>Streaming 50 juta lagu tanpa iklan.<br>Unduh lagu favorit Anda.<br>Dengarkan secara offline.<br>Dapatkan konten asli dan eksklusif.<br>Dengarkan di semua perangkat Anda. Ikut bernyanyi, pilih lagu, dan dengarkan jutaan lagu sambil membaca liriknya!<br>Dapatkan di sini</p>
						</div>
						<div class="stores d-flex flex-row align-items-start justify-content-start flex-wrap">
							<div class="store"><a href="https://www.apple.com/id/ios/app-store/"><img src="./music/images/appstore.png" alt=""></a></div>
							<div class="store"><a href="https://play.google.com/store?utm_source=apac_med&utm_medium=hasem&utm_content=Oct0119&utm_campaign=Evergreen&pcampaignid=MKT-DR-apac-id-1003227-med-hasem-py-Evergreen-Oct0119-Text_Search_BKWS-BKWS%7cONSEM_kwid_43700035189602364_creativeid_284366654857_device_c_kwd_kwd-2072327022_geoid_9056704_network_g&gclid=Cj0KCQjwjOrtBRCcARIsAEq4rW7btoqvbyS2XphjLmD6VTX7ghHQ2sPEdLkyf6R6ieNBtj8k2GEEDhkaAt7jEALw_wcB&gclsrc=aw.ds"><img src="./music/images/googleplay.png" alt=""></a></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
    
	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h1>Latest Lyrics</h1></div>
				</div>
			</div>
			<div class="row news_row">
				
				<!-- News Post -->
				<div class="col-xl-4 col-md-6">
					<div class="news_post image_top">
						<div class="news_post_image"><img src="./music/images/selena.jpg" alt=""></div>
						<div class="news_post_content">
							<div class="news_post_date"><a href="#">Selena Gomez</a></div>
							<div class="news_post_title"><a href="http://localhost/project_basdat/lyrics.php?id_lyrics=16">Lose You To Love Me</a></div>
							<div class="news_post_text">
								<p>Produced by FINNEAS & Mattman & Robin<br>Album SG3</p>
							</div>
						</div>
					</div>
				</div>

				<!-- News Post -->
				<div class="col-xl-4 col-md-6">
					<div class="news_post image_bottom d-flex flex-column align-items-start justify-content-start">
						<div class="news_post_content order-md-1 order-2">
							<div class="news_post_date"><a href="#">Kanye West</a></div>
							<div class="news_post_title"><a href="http://localhost/project_basdat/lyrics.php?id_lyrics=17">Closed On Sunday</a></div>
							<div class="news_post_text">
								<p>Produced by Federico Vindver, Kanye West, Timbaland & 2 more<br>Album JESUS IS KING</p>
							</div>
						</div>
						<div class="news_post_image order-md-2 order-1"><img src="./music/images/kanye.jpg" alt=""></div>
					</div>
				</div>

				<!-- News Post -->
				<div class="col-xl-4 col-md-6">
					<div class="news_post image_top">
						<div class="news_post_image"><img src="./music/images/dualipa.jpg" alt=""></div>
						<div class="news_post_content">
							<div class="news_post_date"><a href="#">Dua Lipa</a></div>
							<div class="news_post_title"><a href="http://localhost/project_basdat/lyrics.php?id_lyrics=18">Don't Start Now</a></div>
							<div class="news_post_text">
								<p>Produced by Ian Kirkpatrick<br>Album DL2*</p>
							</div>
						</div>
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

						

					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Yesyua Leon Christy 123180141 - Salsabilla Filsafati 123180144 <br>
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
<script src="./music/plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="./music/plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="./music/plugins/jPlayer/jplayer.playlist.min.js"></script>
<script src="./music/plugins/easing/easing.js"></script>
<script src="./music/plugins/progressbar/progressbar.min.js"></script>
<script src="./music/plugins/parallax-js-master/parallax.min.js"></script>
<script src="./music/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="./music/js/custom.js"></script>
    <script src="./music/js/artist.js"></script>
    <script src="./music/js/artists.js"></script>
<script src="./music/plugins/video-js/video.min.js"></script>
<script src="./music/plugins/video-js/Youtube.min.js"></script>


    
</body>
</html>