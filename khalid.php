
<html lang="en">
<head>
<title>Single Artist</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="./blk/assets/img/mic.png">
<link rel="stylesheet" type="text/css" href="./music/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="./music/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="./music/plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./music/styles/artist.css">
<link rel="stylesheet" type="text/css" href="./music/styles/artist_responsive.css">
</head>
<body>

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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="./music/images/artists.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Artist</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Artist -->

	<div class="artist">
		<div class="container">
			<div class="row">
				
				<!-- Artist Image -->
				<div class="col-lg-6 artist_col order-lg-1 order-2">
					<div class="artist_image text-right">
						<img src="./music/images/khalid.jpg" alt="">
						<img src="./music/images/khalid.jpg" alt="">
					</div>
				</div>
                 <?php
                    include 'connect.php';
                    $query=mysqli_query($conn,"select * from ((song left join genre on song.id_genre=genre.id_genre) left join jenis on song.id_jenis=jenis.id_jenis) left join artist on jenis.id_artist=artist.id_artist WHERE artist_name = 'Khalid'"); ?>
				<!-- Artist Info -->
				<div class="col-lg-6 order-lg-2 order-1">
                    <?php
                 while($data=mysqli_fetch_array($query))
                                { ?>
					<div class="artist_info">
						<div class="artist_name"><h1> <?php echo $data['artist_name']?></h1></div>
						<div class="artist_title">Artist/Dj</div>
						<div class="artist_info_list">
							<ul>
								<li>Debute: <span>
                                <tr>
                                    <td> <?php echo $data['year_of_debute']?></td>
                                    </span></li>
							</ul>
						</div>
						<div class="artist_info_text">
							<p>SONGS</p>
						</div>
                        <div class="container">
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                     <th scope="col">Chart</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Singer</th>
                                    <th scope="col">Album</th>
                                    <th scope="col">Genre</th>
                                     <th scope="col">Release Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                
                                <tr>
                <td> <?php echo $data['chart']?></td>
                <td> <?php echo $data['title']?></td>
                <td> <?php echo $data['artist_name']?></td>
                <td> <?php echo $data['album']?></td>
                <td> <?php echo $data['genre_name']?></td>
                <td> <?php echo $data['release_date']?></td>
                <td> <a href=lyrics.php?id_lyrics=<?php echo $data['id_song']?>>Lihat Lirik</a></td>
        <?php
        }
        ?>
        </tr>
                           
                                </tbody>
                            </table>
                        </div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Songs -->

	<div class="songs">
		<div class="container">
			<div class="row">
				
				<!-- Songs Content -->
				<div class="col-lg-4">
					<div class="songs_content">
						<div class="songs_title"><h1>Get These Songs On</h1></div>
						<div class="songs_text">
						</div>
						<div class="artist_store d-flex flex-row align-items-start justify-content-start flex-wrap">
							<div class="store"><a href="https://www.apple.com/id/ios/app-store/"><img src="./music/images/appstore.png" alt=""></a></div>
							<div class="store"><a href="https://play.google.com/store?utm_source=apac_med&utm_medium=hasem&utm_content=Oct0119&utm_campaign=Evergreen&pcampaignid=MKT-DR-apac-id-1003227-med-hasem-py-Evergreen-Oct0119-Text_Search_BKWS-BKWS%7cONSEM_kwid_43700035189602364_creativeid_284366654857_device_c_kwd_kwd-2072327022_geoid_9056704_network_g&gclid=Cj0KCQjwjOrtBRCcARIsAEq4rW7btoqvbyS2XphjLmD6VTX7ghHQ2sPEdLkyf6R6ieNBtj8k2GEEDhkaAt7jEALw_wcB&gclsrc=aw.ds"><img src="./music/images/googleplay.png" alt=""></a></div>
						</div>
					</div>
				</div>

				<!-- Songs -->
				<div class="col-lg-8">
					<div class="songs_container">

						<!-- Song -->
						<div class="song">

							<!-- Player -->
							<div class="single_player_container">
								<div class="single_player">
									<div class="jp-jplayer jplayer" data-title="Better Days" data-artist="Bensound" data-ancestor=".jp_container_1" data-url="./music/files/bensound-betterdays.mp3"></div>
									<div class="jp-audio jp_container_1" role="application" aria-label="media player">
										<div class="jp-gui jp-interface single_player_inner d-flex flex-row align-items-center justify-content-start">

											<!-- Player Controls -->
											<div class="player_controls_box">
												<div class="jp-controls-holder player_controls d-flex flex-row align-items-start justify-content-start">
													<button class="jp-play player_button" tabindex="0"></button>
													<button class="jp-stop player_button" tabindex="0"></button>
												</div>
											</div>

											<!-- Progress Bar -->
											<div class="player_bars d-flex flex-row align-items-start justify-content-start">
												<div class="player_progress_box">
													<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
													<div class="song_info">
														<div class="jp-title" aria-label="title"></div>
													</div>
													<div class="jp-progress">
														<div class="jp-seek-bar">
															<div>
																<div class="jp-play-bar"><span></span></div>
															</div>
														</div>
													</div>
													<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
												</div>

												<!-- Volume Controls -->
												<div class="jp-volume-controls ml-auto">
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

						<!-- Song -->
						<div class="song">
							
							<!-- Player -->
							<div class="single_player_container">
								<div class="single_player">
									<div class="jp-jplayer jplayer" data-title="Dubstep" data-artist="Bensound" data-ancestor=".jp_container_2" data-url="./music/files/bensound-dubstep.mp3"></div>
									<div class="jp-audio jp_container_2" role="application" aria-label="media player">
										<div class="jp-gui jp-interface single_player_inner d-flex flex-row align-items-center justify-content-start">

											<!-- Player Controls -->
											<div class="player_controls_box">
												<div class="jp-controls-holder player_controls d-flex flex-row align-items-start justify-content-start">
													<button class="jp-play player_button" tabindex="0"></button>
													<button class="jp-stop player_button" tabindex="0"></button>
												</div>
											</div>

											<!-- Progress Bar -->
											<div class="player_bars d-flex flex-row align-items-start justify-content-start">
												<div class="player_progress_box">
													<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
													<div class="song_info">
														<div class="jp-title" aria-label="title"></div>
													</div>
													<div class="jp-progress">
														<div class="jp-seek-bar">
															<div>
																<div class="jp-play-bar"><span></span></div>
															</div>
														</div>
													</div>
													<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
												</div>

												<!-- Volume Controls -->
												<div class="jp-volume-controls ml-auto">
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

						<!-- Song -->
						<div class="song">

							<!-- Player -->
							<div class="single_player_container">
								<div class="single_player">
									<div class="jp-jplayer jplayer" data-title="Sunny" data-artist="Bensound" data-ancestor=".jp_container_3" data-url="./music/files/bensound-sunny.mp3"></div>
									<div class="jp-audio jp_container_3" role="application" aria-label="media player">
										<div class="jp-gui jp-interface single_player_inner d-flex flex-row align-items-center justify-content-start">

											<!-- Player Controls -->
											<div class="player_controls_box">
												<div class="jp-controls-holder player_controls d-flex flex-row align-items-start justify-content-start">
													<button class="jp-play player_button" tabindex="0"></button>
													<button class="jp-stop player_button" tabindex="0"></button>
												</div>
											</div>

											<!-- Progress Bar -->
											<div class="player_bars d-flex flex-row align-items-start justify-content-start">
												<div class="player_progress_box">
													<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
													<div class="song_info">
														<div class="jp-title" aria-label="title"></div>
													</div>
													<div class="jp-progress">
														<div class="jp-seek-bar">
															<div>
																<div class="jp-play-bar"><span></span></div>
															</div>
														</div>
													</div>
													<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
												</div>

												<!-- Volume Controls -->
												<div class="jp-volume-controls ml-auto">
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
	</div>

	<!-- Video -->

	<div class="video">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="video_container_outer">
						<div class="video_container">
							<!-- Video poster image artist: https://unsplash.com/@annademy -->
							<video id="vid1" class="video-js vjs-default-skin" controls data-setup='{ "poster": "images/video.jpg", "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/by3yRdlQvzs"}], "youtube": { "iv_load_policy": 1 } }'>
							</video>
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

				<!-- Newsletter Content
				<div class="col-xl-6">
					<div class="newsletter_content">
						<div class="section_title"><h1>Subscribe & Follow</h1></div>
						<div class="newsletter_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi condimentum, neque ac porttitor scelerisque.</p>
						</div>
					</div>
				</div>

				<!-- Newsletter Form
				<div class="col-xl-6 nl_col">
					<div class="newsletter_form_container d-flex flex-column align-items-start justify-content-end">
						<form action="#" class="newsletter_form" id="newsletter_form">
							<div class="d-flex flex-row align-items-start justify-content-between">
								<input type="email" class="newsletter_input" placeholder="Your E-mail" required="required">
								<button class="button newsletter_button"><span>subscribe</span></button>
							</div>
						</form>
					</div>
				</div>-->

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
							<a href="./index.php" class="d-flex flex-row align-items-end justify-content-start">
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
<script src="./music/plugins/video-js/video.min.js"></script>
<script src="./music/plugins/video-js/Youtube.min.js"></script>
<script src="./music/js/artist.js"></script>
</body>
</html>