<?php 
	$project_name = "Name of the project"
?>

<?php //include 'ssl-config.php'; ?>

<?php 
	//Sharing
	$title = '';
	$description = '';
	$url = '';
	$image = '';
	$type = '';
?>

<!doctype html>
<html class="no-js" lang="">
  <head>
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $description ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $project_name ?></title>

	<link type="image/x-icon" rel="shortcut icon" href="images/favicon.ico" />

	<!-- OPENGRAPH -->
	<!--<meta property="og:type" content="<?php echo $type ?>"/>-->
	<meta property="og:title" content="<?php echo $title ?>"/>
	<meta property="og:description" content="<?php echo $description ?>"/>
	<meta property="og:image" content="<?php echo $image ?>"/>
	<meta property="og:url" content="<?php echo $url ?>"/>
	<!--<meta property="og:site_name" content="">-->

	<!-- TWITTER CARD -->
	<!--<meta name="twitter:site" content="@nytimesbits" />
	<meta name="twitter:creator" content="@nickbilton" />-->

	<!--<meta name="twitter:card" content="<?php echo $type ?>" />-->
	<meta property="og:title" content="<?php echo $title ?>" />
	<meta property="og:description" content="<?php echo $description ?>" />
	<meta property="og:image" content="<?php echo $image ?>" />
	<meta property="og:url" content="<?php echo $url ?>" />

	<link rel="stylesheet" href="dist/styles/main.css">
	
	<script src="libs/html5shiv/dist/html5shiv.min.js"></script>
	
	<!-- Anti click jack -->
	<style id="antiClickjack">body{display:none !important;}</style>
	<script type="text/javascript">
		if (self === top) {
			var antiClickjack = document.getElementById("antiClickjack");
			antiClickjack.parentNode.removeChild(antiClickjack);
		} else {
			top.location = self.location;
		}
	</script>	
  </head>
  <body>
	<!--[if lt IE 10]>
	  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
	<div class="main-container">
		<header class="header-main">
			<h1 class="brand-top">
				<a href="" title="<?php echo $project_name ?>" title="<?php echo $project_name ?>">
					<span class="text"></span>
					<img src="/images/brand.png" alt="">
				</a>
			</h1>
			<nav class="nav-main">
				<ul class="list-unstyled nav">
					<li><a href="#" title="">Home</a></li>
					<li><a href="#" title="">About</a></li>
					<li><a href="#" title="">Contact</a></li>
				</ul>          
			</nav><!-- .nav-main END -->
		</header><!-- .header-main END -->
		<main class="main">
