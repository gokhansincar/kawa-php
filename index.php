<?php

include ("app.php");

?>

<!DOCTYPE HTML>
<html lang="English">
<!--
Kurdish Legends
-->
<head>
	<title><?php echo pages($page, 'head', $lang);?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
	<link rel="manifest" href="favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0" />
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />
</head>


<body>
	<header class="header-fixed" id="top-header">
	
		<figure id="logo" class="font700">
			<img src="images/logo.png" alt="SiNCaR">
		</figure>
	
		<figure id="nav-triggers">
			<a href="javascript:void(0)" id="open-menu" class="trigger"><img src="images/burger-icon.svg"
					alt="Burger Menu Icon"></a>
			<a href="javascript:void(0)" id="close-menu" class="trigger"><img src="images/close-icon.svg"
					alt="Close Menu Icon"></a>
		</figure>
	
		<nav class="menu" id="main-nav">
			<ul class="top-menu menu row">
				<li><a href="?page=index&lang=<?php echo $lang; ?>">Home Page</a></li>
				<li><a href="?page=about&lang=<?php echo $lang; ?>">Contact Us</a></li>
				<?php if($page == "kawa" || $page ==  "kawa2" || $page == "kawa3") { 
				echo '<li class="parent version"><a id="version" href="#">Version</a>
					<ul class="sub-menu">
						<li><a href="?page=<?php echo $page; ?>&lang=&version=1">Version 1</a></li>
						<li><a href="?page=<?php echo $page; ?>&lang=&version=2">Version 2</a></li>
						<li><a href="?page=<?php echo $page; ?>&lang=&version=3">Version 3</a></li>
					</ul>';
				} ?>
				<li class="parent language"><a id="language" href="#">Language</a>
					<ul class="sub-menu" id="sub-menu">
						<li><a href="?page=<?php echo $page; ?>&lang=fr">Francais</a></li>
						<li><a href="?page=<?php echo $page; ?>">English</a></li>
						<li><a href="?page=<?php echo $page; ?>&lang=tr">Türkçe</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	
	</header>
	<main id="main" class="is-preload">
	<?php
		if($version){
			include("html/".$page.$version.strtoupper($lang).".html");
		} else {
			include("html/".$page.strtoupper($lang).".html") ;
		}
	?>
	</main>
				<!-- Footer -->
				<footer class="wrapper style1 align-center">
					<div class="inner">
						<ul class="icons">
							<li "><a href="https://www.facebook.com/saperiorapa"
									class="fa fa-facebook"></a></li>
							<li "><a href="https://twitter.com/saperiorapa" class="fa fa-twitter"></a></a>
							</li>
							<li "><a href="https://www.instagram.com/saperiorapa"
									class="fa fa-instagram"></a></li>
							<li "><a href="https://www.linkedin.com/in/g%C3%B6khan-sincar-20443b179/"
									class="fa fa-linkedin"></a></li>
							<li "><a href="https://github.com/gokhansincar" class="fa fa-github"></a></li>
							<li "><a href="mailto:gokhan.sincar@powercoders.org"
									class="fa fa-envelope"></a></li>
						</ul>
						<p align="center">&copy; 2019 - <?php echo date("Y"); ?> <strong>Sincar</strong></p>
					</div>
				</footer>

	<script src="assets/js/app.js"></script>
</body>

</html>