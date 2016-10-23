<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head >
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<!-- Vous pouvez mettre ici toutes les infos que vous voulez retrouver dans le header de toutes vos pages  -->
		<img src="http://vignette3.wikia.nocookie.net/uncyclopedia/images/4/4c/Striped_apple_logo.png/revision/latest?cb=20090104011038" alt="logo twitter">
		<nav>
			<ul>
				<li> <a href="http://www.apple.com/fr/mac/"> MacBook </a> </li>
				<li> <a href="http://www.apple.com/fr/iphone/"> Iphone </a> </li>
				<li> <a href="http://www.apple.com/fr/ipad/"> Ipad </a> </li>
			</ul>
		</nav>
	</header>
