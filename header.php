<!doctype html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php bloginfo('name'); ?><?php wp_title("|",true); ?></title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Vollkorn:400,700,400italic' rel='stylesheet' type='text/css'>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

	<div class="page">
	
    	<header role="header" class="clearfix">
    		<h1 class="animated fadeInRight"><a href="<?php echo get_option('home'); ?>/"><span class="red"><?php bloginfo('name'); ?></span></a></h1>
    		<nav>
    			<ul>
    				<?php wp_list_pages('title_li='); ?>
    			</ul>
    		</nav>
    	</header>