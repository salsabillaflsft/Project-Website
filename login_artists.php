<?php 
session_start();
if (empty($_SESSION['email'])) {
	header("location:contact.php?pesan=belum_login");
}
?>
<html lang="en">
<head>
<title>Artists</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="./blk/assets/img/mic.png">
<link rel="stylesheet" type="text/css" href="./music/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="./music/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./music/plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="./music/plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="./music/plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="./music/styles/artists.css">
<link rel="stylesheet" type="text/css" href="./music/styles/artists_responsive.css">
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
								<li><a href="./contact_home.php">Home</a></li>
								<li class="active"><a href="./login_artists.php">Artists</a></li>
								<li><a href="./login_lyrics.php">Lyrics</a></li>
							</ul>
						</nav>

						<!-- User area -->
						<div class="log_reg d-flex flex-row align-items-center justify-content-start">
							<ul class="d-flex flex-row align-items-start justify-content-start">
								<li> <?php
	                               echo $_SESSION['email'];
                                ?></li>
                                <li><a href="./logout.php">Logout</a></li>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="./music/images/artists.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Artists</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Search -->

	<div class="search">
		<div class="container">
			<div class="row">
				<div class="col">
					<!--<div class="search_form_container">
						<form action="./artist.php" class="search_form" id="search_form">
							<div class="d-flex flex-md-row flex-column align-items-center justify-content-between">
								<input type="text" class="search_input" placeholder="Artist" required="required">
								<input type="text" class="search_input" placeholder="Album" required="required">
								<button class="button search_button"><span>search</span></button>
							</div>
						</form>
					</div>-->
				</div>
			</div>
		</div>
	</div>

	<!-- Artists -->

	<div class="artists">
		<div class="letters">
			<!--<ul class="d-flex flex-row align-items-start justify-content-center flex-wrap">
				<li><a href="./artist.php?huruf=<?php echo($row->artist_name)?>">a</a></li>
				<li><a href="./artist.php">b</a></li>
				<li><a href="./artist.php">c</a></li>
				<li><a href="./artist.php">d</a></li>
				<li><a href="./artist.php">e</a></li>
				<li><a href="./artist.php">f</a></li>
				<li><a href="./artist.php">g</a></li>
				<li><a href="./artist.php">h</a></li>
				<li><a href="./artist.php">i</a></li>
				<li><a href="./artist.php">j</a></li>
				<li><a href="./artist.php">k</a></li>
				<li><a href="./artist.php">l</a></li>
				<li><a href="./artist.php">m</a></li>
				<li><a href="./artist.php">n</a></li>
				<li><a href="./artist.php">o</a></li>
				<li><a href="./artist.php">p</a></li>
				<li><a href="./artist.php">q</a></li>
				<li><a href="./artist.php">r</a></li>
				<li><a href="./artist.php">s</a></li>
				<li><a href="./artist.php">t</a></li>
				<li><a href="./artist.php">u</a></li>
				<li><a href="./artist.php">v</a></li>
				<li><a href="./artist.php">w</a></li>
				<li><a href="./artist.php">x</a></li>
				<li><a href="./artist.php">y</a></li>
				<li><a href="./artist.php">z</a></li>
			</ul>-->
		</div>
		<div class="artists_container">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<!-- Artist -->
						<div class="artist">
							<div class="row">
								
								<!-- Artist Image -->
								<div class="col-lg-6">
									<div class="artist_image"><img src="./music/images/khalid.jpg" alt=""></div>
								</div>

								<!-- Artist Content -->
								<div class="col-lg-6 artist_col">
									<div class="artist_content">
										<div class="artist_info">
											<div class="artist_name"><h1><a href="./login_khalid.php">Khalid</a></h1></div>
											<div class="artist_text">
												<p>Khalid Donnel Robinson (born February 11, 1998) is an American singer and songwriter. He is signed to Right Hand Music Group and RCA Records. His debut single, "Location", was released in July 2016 and peaked at number 16 on the US Billboard Hot 100 chart and was later certified quadruple platinum by the Recording Industry Association of America (RIAA). His debut studio album, American Teen, was released on March 3, 2017. Since then he has achieved several top 10 hits, a top-ten charting EP, a number one album and five Grammy nominations.</p>
											</div>
											<div class="artist_store d-flex flex-row align-items-start justify-content-start flex-wrap">
												<div class="store"><a href="#"><img src="./music/images/appstore.png" alt=""></a></div>
												<div class="store"><a href="#"><img src="./music/images/googleplay.png" alt=""></a></div>
											</div>
										</div>

										<!-- Player -->
										<div class="single_player_container">
											<div class="single_player">
												<!--<div class="jp-jplayer jplayer" data-title="Better Days" data-artist="Bensound" data-ancestor=".jp_container_1" data-url="files/bensound-betterdays.mp3"></div>
												<div class="jp-audio jp_container_1" role="application" aria-label="media player">
													<div class="jp-gui jp-interface single_player_inner d-flex flex-row align-items-center justify-content-start">-->

														<!--Player Controls-->
														<div class="player_controls_box">
															<!--<div class="jp-controls-holder player_controls d-flex flex-row align-items-start justify-content-start">
																<button class="jp-play player_button" tabindex="0"></button>
																<button class="jp-stop player_button" tabindex="0"></button>
															</div>-->
														</div>

														<!--Progress Bar-->
														<div class="player_bars d-flex flex-row align-items-start justify-content-start">
															<!--<div class="player_progress_box">
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
																<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>-->
															</div>

															<!--Volume Controls-->
															<div class="jp-volume-controls ml-auto">
																<!--<div class="mute_button">
																	<button class="jp-mute" tabindex="0"></button>
																</div>
																<div class="d-flex flex-row align-items-center justify-content-start">
																	<div class="jp-volume-bar">
																		<div>
																			<div class="jp-volume-bar-value"></div>
																		</div>
																	</div>
																</div>
															</div>-->
														</div>
														
													</div>
													<div class="jp-no-solution">
														<!--<span>Update Required</span>
														To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>-->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div> -->

						<!-- Artist -->
						<div class="artist">
							<div class="row">
								
								<!-- Artist Image -->
								<div class="col-lg-6">
									<div class="artist_image"><img src="./music/images/marc.jpg" alt=""></div>
								</div>

								<!-- Artist Content -->
								<div class="col-lg-6 artist_col">
									<div class="artist_content">
										<div class="artist_info">
											<div class="artist_name"><h1><a href="./login_mariah.php">Mariah Carey</a></h1></div>
											<div class="artist_text">
												<p>Mariah Carey (born March 27, 1969 or 1970) is an American singer, songwriter, actress, record producer, and entrepreneur. Referred to as the "Songbird Supreme" by the Guinness World Records, she is noted for her five-octave vocal range, melismatic singing style, and signature use of the whistle register. She rose to fame in the early 1990s after signing to Columbia Records and releasing her eponymous debut album, which topped the U.S. Billboard 200 for eleven consecutive weeks. Soon after, Carey became the only artist ever to have their first five singles reach number one on the U.S. Billboard Hot 100 chart, from "Vision of Love" to "Emotions".</p>
											</div>
											<div class="artist_store d-flex flex-row align-items-start justify-content-start flex-wrap">
												<div class="store"><a href="#"><img src="./music/images/appstore.png" alt=""></a></div>
												<div class="store"><a href="#"><img src="./music/images/googleplay.png" alt=""></a></div>
											</div>
										</div>

										<!-- Player -->
										<div class="single_player_container">
											<div class="single_player">
												<!--<div class="jp-jplayer jplayer" data-title="Dubstep" data-artist="Bensound" data-ancestor=".jp_container_2" data-url="files/bensound-dubstep.mp3"></div>
												<div class="jp-audio jp_container_2" role="application" aria-label="media player">
													<div class="jp-gui jp-interface single_player_inner d-flex flex-row align-items-center justify-content-start"> -->

														<!-- Player Controls -->
														<div class="player_controls_box">
															<!--<div class="jp-controls-holder player_controls d-flex flex-row align-items-start justify-content-start">
																<button class="jp-play player_button" tabindex="0"></button>
																<button class="jp-stop player_button" tabindex="0"></button>
															</div> -->
														</div>

														<!-- Progress Bar -->
														<div class="player_bars d-flex flex-row align-items-start justify-content-start">
															<!--<div class="player_progress_box">
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
																<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>  -->
															</div>

															<!-- Volume Controls -->
															<div class="jp-volume-controls ml-auto">
																<!--<div class="mute_button">
																	<button class="jp-mute" tabindex="0"></button>
																</div>
																<div class="d-flex flex-row align-items-center justify-content-start">
																	<div class="jp-volume-bar">
																		<div>
																			<div class="jp-volume-bar-value"></div>
																		</div>
																	</div>
																</div>
															</div> -->
														</div>
														
													</div>
													<div class="jp-no-solution">
														<!-- <span>Update Required</span>
														To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Artist -->
						<div class="artist">
							<div class="row">
								
								<!-- Artist Image -->
								<div class="col-lg-6">
									<div class="artist_image"><img src="./music/images/bee.jpg" alt=""></div>
								</div>

								<!-- Artist Content -->
								<div class="col-lg-6 artist_col">
									<div class="artist_content">
										<div class="artist_info">
											<div class="artist_name"><h1><a href="./login_beyonce.php">Beyonce</a></h1></div>
											<div class="artist_text">
												<p>Beyoncé Giselle Knowles-Carter (/biːˈjɒnseɪ/ bee-YON-say; born September 4, 1981) is an American singer, songwriter, and actress. Born and raised in Houston, Texas, Beyoncé performed in various singing and dancing competitions as a child. She rose to fame in the late 1990s as the lead singer of Destiny's Child, one of the best-selling girl groups in history. During their hiatus, she made her theatrical film debut with a role in the US box-office number-one Austin Powers in Goldmember (2002) and recorded her first solo album, Dangerously in Love (2003), which debuted at number one on the US Billboard 200 chart. It also featured the US Billboard Hot 100 number-one singles "Crazy in Love" and "Baby Boy".</p>
											</div>
											<div class="artist_store d-flex flex-row align-items-start justify-content-start flex-wrap">
												<div class="store"><a href="#"><img src="./music/images/appstore.png" alt=""></a></div>
												<div class="store"><a href="#"><img src="./music/images/googleplay.png" alt=""></a></div>
											</div>
										</div>

										<!-- Player -->
										<div class="single_player_container">
											<div class="single_player">
												<!--<div class="jp-jplayer jplayer" data-title="Sunny" data-artist="Bensound" data-ancestor=".jp_container_3" data-url="files/bensound-sunny.mp3"></div>
												<div class="jp-audio jp_container_3" role="application" aria-label="media player">
													<div class="jp-gui jp-interface single_player_inner d-flex flex-row align-items-center justify-content-start"> -->

														<!-- Player Controls -->
														<div class="player_controls_box">
															<!--<div class="jp-controls-holder player_controls d-flex flex-row align-items-start justify-content-start">
																<button class="jp-play player_button" tabindex="0"></button>
																<button class="jp-stop player_button" tabindex="0"></button>
															</div> -->
														</div>

														<!-- Progress Bar -->
														<div class="player_bars d-flex flex-row align-items-start justify-content-start">
															<!-- <div class="player_progress_box">
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
															</div> -->

															<!-- Volume Controls -->
															<div class="jp-volume-controls ml-auto">
																<!-- <div class="mute_button">
																	<button class="jp-mute" tabindex="0"></button>
																</div>
																<div class="d-flex flex-row align-items-center justify-content-start">
																	<div class="jp-volume-bar">
																		<div>
																			<div class="jp-volume-bar-value"></div>
																		</div>
																	</div>
																</div> -->
															</div>
														</div>
														
													</div>
													<div class="jp-no-solution">
														<!-- <span>Update Required</span>
														To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>  -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Artist -->
						<div class="artist">
							<div class="row">
								
								<!-- Artist Image -->
								<div class="col-lg-6">
									<div class="artist_image"><img src="./music/images/child.jpg" alt=""></div>
								</div>

								<!-- Artist Content -->
								<div class="col-lg-6 artist_col">
									<div class="artist_content">
										<div class="artist_info">
											<div class="artist_name"><h1><a href="./login_childish.php">Childish Gambino</a></h1></div>
											<div class="artist_text">
												<p>Donald McKinley Glover Jr. was born on September 25, 1983 at Edwards Air Force Base, California. He was raised in Stone Mountain, Georgia. His mother, Beverly (née Smith), is a retired daycare provider, and his father, Donald Glover Sr., was a retired postal worker. His parents also served as foster parents for 14 years. Glover was raised as a Jehovah's Witness. His younger brother, Stephen, would later become a writer and producer who collaborates with him. He also has a sister named Brianne.<br>Glover attended Lakeside High School and DeKalb School of the Arts, and was voted "Most Likely to Write for The Simpsons" in his high school yearbook. In 2006, he graduated from the New York University Tisch School of the Arts with a degree in Dramatic Writing. While at Tisch, he self-produced the independent mixtape The Younger I Get, which was not released and was later disowned by Glover for being the "too-raw ramblings" of what he calls a "decrepit Drake". He also began DJing and producing electronic music under the moniker MC D (later as mcDJ) remixing Sufjan Stevens' album Illinois (2005).</p>
											</div>
											<div class="artist_store d-flex flex-row align-items-start justify-content-start flex-wrap">
												<div class="store"><a href="#"><img src="./music/images/appstore.png" alt=""></a></div>
												<div class="store"><a href="#"><img src="./music/images/googleplay.png" alt=""></a></div>
											</div>
										</div>

										<!-- Player -->
										<div class="single_player_container">
											<div class="single_player">
											<!--	<div class="jp-jplayer jplayer" data-title="Rehat" data-artist="Kunto Aji" data-ancestor=".jp_container_4" data-url="files/rehat.mp3"></div>
												<div class="jp-audio jp_container_4" role="application" aria-label="media player">
													<div class="jp-gui jp-interface single_player_inner d-flex flex-row align-items-center justify-content-start">

														<!-- Player Controls -->
														<div class="player_controls_box">
															<!--<div class="jp-controls-holder player_controls d-flex flex-row align-items-start justify-content-start">
																<button class="jp-play player_button" tabindex="0"></button>
																<button class="jp-stop player_button" tabindex="0"></button>
															</div> -->
														</div>

														<!-- Progress Bar -->
														<div class="player_bars d-flex flex-row align-items-start justify-content-start">
															<!-- <div class="player_progress_box">
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
															</div> -->

															<!-- Volume Controls -->
															<div class="jp-volume-controls ml-auto">
																<!-- <div class="mute_button">
																	<button class="jp-mute" tabindex="0"></button>
																</div>
																<div class="d-flex flex-row align-items-center justify-content-start">
																	<div class="jp-volume-bar">
																		<div>
																			<div class="jp-volume-bar-value"></div>
																		</div>
																	</div>
																</div> -->
															</div>
														</div>
														
													</div>
													<div class="jp-no-solution">
														<!-- <span>Update Required</span>
														To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a> -->
													</div>
												</div> 
											</div>
										</div>
									</div>
								</div>

						<!--	</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>-->

	<!-- Featured Artist -->

	<div class="featured_artist">
		<div class="background_image" style="background-image:url(./music/images/billie.jpg)"></div>
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Featured Artist Content -->
				<div class="col-lg-6 offset-lg-6">
					<div class="featured_artist_content">
						<div class="featured_subtitle">Artist of the month</div>
						<div class="featured_title"><h1>Billie Eilish</h1></div>
						<div class="featured_artist_text p">
							<p style="color: darkseagreen">Billie Eilish Pirate Baird O'Connell (/ˈaɪlɪʃ/; born December 18, 2001) is an American singer-songwriter. Born and raised in Highland Park, Los Angeles, she began singing at a young age. She gained a following in 2016 when she released her single "Ocean Eyes" on audio distribution platform SoundCloud, subsequently released on the record labels Darkroom and Interscope Records. Her debut EP, Don't Smile at Me (2017), reached the top 15 in the United States, United Kingdom, Canada, and Australia, and created the single "Bellyache". Eilish also collaborated with American singer Khalid for the single "Lovely", which was released in April 2018 and added to the soundtrack for the second season of 13 Reasons Why.</p>
						</div>
						<div class="button featured_artist_button"><a href="https://id.wikipedia.org/wiki/Billie_Eilish">read more</a></div>
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
						<div class="section_title"><h1>ARTIST LIST</h1></div>
						<div class="newsletter_text">
                                            
				<!-- Artist Info -->
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="artist_info">
						<div class="artist_name"><h1>
                       </h1></div>
						<div class="artist_title">Artist/Dj</div>
						<div class="artist_info_list">
						</div>
						<div class="artist_info_text">
							<p>SONGS</p>
						</div>
                        <div class="container">
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                     <th scope="col">Chart</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Singer</th>
                                    <th scope="col">Album</th>
                                    <th scope="col">Genre</th>
                                     <th scope="col">Release Date</th>
                                   
                                </tr>
                            </thead>
                                <?php
                    include 'connect.php';
                    $query=mysqli_query($conn,"select * from ((song left join genre on song.id_genre=genre.id_genre) left join jenis on song.id_jenis=jenis.id_jenis) left join artist on jenis.id_artist=artist.id_artist order by chart asc"); 
               
                 while($data=mysqli_fetch_array($query))
                                { ?>
                            <tbody>
                                 
                                <tr>
                <td> <a href=./login_lyrics.php?id_lyrics=<?php echo $data['id_song']?>>Lihat Lirik</a></td>
                <td> <?php echo $data['chart']?></td>
                <td> <?php echo $data['title']?></td>
                <td> <?php echo $data['artist_name']?></td>
                <td> <?php echo $data['album']?></td>
                <td> <?php echo $data['genre_name']?></td>
                <td> <?php echo $data['release_date']?></td>
       
</tr>
                                 <?php
        }
        ?>
                           
                                </tbody>
                            </table>
                        </div>
					</div>
				</div>
						</div>
					</div>
				</div>

				<!-- Newsletter Form -->
				<div class="col-xl-6 nl_col">
					<div class="newsletter_form_container d-flex flex-column align-items-start justify-content-end">
						
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
						<div class="copyright text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->  Yesyua Leon Christy 123180141 - Salsabilla Filsafati 123180144 <i class="fa fa-heart-o" aria-hidden="true"></i><i class="fa fa-heart-o" aria-hidden="true"></i><i class="fa fa-heart-o" aria-hidden="true"></i>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
			</div>
		</div>
			
	</footer>
<!-- </div> -->

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
<script src="./music/js/artists.js"></script>
</body>
</html>