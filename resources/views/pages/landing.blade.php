
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LAMAS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('vendor/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('vendor/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	
	<link rel="stylesheet" href="{{ asset('vendor/css/bootstrap.css')}} ">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('vendor/css/magnific-popup.css') }}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('vendor/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('vendor/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('vendor/css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('vendor/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="index.html">LAMAS</a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li><a href="services.html">HOME</a></li>
								<li><a href="blog.html">PROSEDUR</a></li>
								<li><a href="about.html">TENTANG</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<section id="home" class="video-hero" style="height: 700px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a> 
			<div class="display-t text-center">
				<div class="display-tc">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>Aplikasi Laporan Pengaduan Masyarakat</h2>
								<p>"Laporkan segala hal kepada pihak terkait"</p>
								<p><a href="{{ route('laporan.user') }}" class="btn btn-primary btn-lg btn-custom">Lapor</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- <div class="colorlib-featured">
			<div class="row animate-box">
				<div class="featured-wrap">
					<div class="owl-carousel">
						<div class="item">
							<div class="col-md-8 col-md-offset-2">
								<div class="featured-entry">
									<img class="img-responsive" src="images/dashboard_full_1.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2">
								<div class="featured-entry">
									<img class="img-responsive" src="images/dashboard_full_2.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2">
								<div class="featured-entry">
									<img class="img-responsive" src="images/dashboard_full_3.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<div class="colorlib-services colorlib-bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-browser"></i>
							</span>
							<div class="desc">
								<h3>Login/Register</h3>
								<p>Daftar atau Login terlebih dahulu sebelum anda menulis pengaduan</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-letter"></i>
							</span>
							<div class="desc">
								<h3>Tulis Pengaduan</h3>
								<p>Tulis pengaduan dengan singkat, jelas, dan padat</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-layers"></i>
							</span>
							<div class="desc">
								<h3>Verifikasi</h3>
								<p>Tunggu verifikasi setelah anda membuat pengaduan</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Collaborate with your design team in a new way</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<span class="play"><a href="https://vimeo.com/channels/staffpicks/93951774" class="pulse popup-vimeo"><i class="icon-play3"></i></a></span>
					</div>
				</div>
			</div>
		</div> -->

		

		<footer id="colorlib-footer">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Deni Hermawan | All rights reserved </p>
						</div>
					</div>
				</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('vendor/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('vendor/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('vendor/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('vendor/js/jquery.waypoints.min.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('vendor/js/jquery.stellar.min.js') }}"></script>
	<!-- YTPlayer -->
	<script src="{{ asset('vendor/js/jquery.mb.YTPlayer.min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{ asset('vendor/js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('vendor/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('vendor/js/magnific-popup-options.js') }}"></script>
	<!-- Counters -->
	<script src="{{ asset('vendor/js/jquery.countTo.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('vendor/js/main.js')}}"></script>

	</body>
</html>

