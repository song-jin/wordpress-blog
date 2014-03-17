<?php  
/*
	the header template of A-Fucking-Blog;
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>I AM A PERSONAL BLOG</title>
	<meta charset='<?php bloginfo('charset'); ?>'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='pingback' href='<?php bloginfo('pingback_url'); ?>'>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">

	
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css">
	<![endif]-->
</head>

<body>
	<header>
		<div class='wrapper'>
			<h1>I AM A PERSONAL BLOG</h1>
			<p>I just a fucking personal blog, if you don't like me, get out please!</p>
			<ul>
				<li><a href="<?php bloginfo('url') ?>">Blog</a></li>
				<li><a href="<?php bloginfo('url') ?>/archives">Archives</a></li>
				<li><a href="<?php bloginfo('url') ?>/link">Links</a></li>
				<li><a href="<?php bloginfo('url') ?>/about">About</a></li>
			</ul>
		</div>
	</header>
