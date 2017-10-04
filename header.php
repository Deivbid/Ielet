<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title> IELET</title>
		<?php wp_head(); ?>		
	</head>
	<body>
		<header class="site-header">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="#">Navbar</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <!--<div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Features</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Pricing</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link disabled" href="#">Disabled</a>
			      </li>
			    </ul>
			  </div> -->

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
		</header>
		
