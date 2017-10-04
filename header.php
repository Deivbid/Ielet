<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<title> IELET</title>
		<?php wp_head(); ?>		
	</head>
	<body>

	<?php $destacada = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>

		<header class="site-header" style="background-image: url(<?php echo $destacada[0]; ?>);">
			<nav class="navbar navbar-expand-lg navbar-light">
			  <!--<a class="navbar-brand" href="#">Navbar</a> -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <?php 
			  	wp_nav_menu( array(
			  		'theme_location'	=>	'menu_principal',
			  		'container'			=>	'div',
			  		'container_class'	=>	'collapse navbar-collapse',
			  		'container_id'		=>	'navbarNav',
			  		'menu_class'		=>	'navbar-nav',
			  		'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                	'walker'            => new WP_Bootstrap_Navwalker()
                	));
			   ?>
			</nav>

			<div class="container">
        		<div class="brand">
        			<h1>Iglesia Evangelica Libre El Trigal - Valencia  &dagger;</h1>
        		</div>
        	</div>
		</header>


		
