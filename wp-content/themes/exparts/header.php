<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="icon" href="/wp-content/themes/exparts/images/favicon.jpg">
	<title>AN INTERNATIONAL SOCIAL NETWORK FOR ROME EXPATS &amp;  DIPLOMATS - HOME</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Bootstrap Core CSS -->
	<link href="/wp-content/themes/exparts/css/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="/wp-content/themes/exparts/css/bootstrap/bootstrap.css" rel="stylesheet">

	<!-- Plugin CSS -->
	<link rel="stylesheet" href="/wp-content/themes/exparts/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/wp-content/themes/exparts/dist/stylesheets/superslides.css">

	<link href="/wp-content/themes/exparts/css/flexslider.css" rel="stylesheet">

	<!-- Theme CSS -->
	<link href="/wp-content/themes/exparts/css/styles.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!--<link href="css/full-slider.css" rel="stylesheet">-->



</head>
<body id="home" data-spy="scroll" data-target=".navbar-fixed-top">
<div class="member-btn"><a href="shttp://eepurl.com/btjRLP" class="btn btn-info" target="_blank">Become A member</a></div>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand page-scroll" href="#index.html"><img src="/wp-content/themes/exparts/images/logo.png" class="img-responsive"></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<?php wp_nav_menu( array(
				'menu_id' => 'header',
				'menu_class' => 'nav navbar-nav main-nav navbar-right',
				'container_class' => 'collapse navbar-collapse',
		) ); ?>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>
