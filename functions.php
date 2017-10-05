<?php

	/*function church_styles() 
	{
		
		
		//wp_enqueue_style('normalize', get_stylesheet_directory_uri() . "/node_modules/normalize.css/normalize.css");

		wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . "/node_modules/bootstrap/dist/css/bootstrap.min.css");

		wp_enqueue_style('style', get_stylesheet_uri());
	}

	function church_script()
	{
		//PROMETO SOLUCIONAR ESTE PROBLEMA JEJEJEJEJE .-David
		//wp_enqueue_script('popper', get_stylesheet_directory_uri() . "/node_modules/popper.js/dist/popper.js");

		wp_enqueue_script('jquery3', get_stylesheet_directory_uri() . "/node_modules/jquery/dist/jquery.min.js");
		wp_enqueue_script( 'popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js");
		wp_enqueue_script('bootstrapjs', get_stylesheet_directory_uri() . "/node_modules/bootstrap/dist/js/bootstrap.min.js");
	}


	add_theme_support( 'post-thumbnails' );

	// Register Custom Navigation Walker
	require_once('class-wp-bootstrap-navwalker.php');

	/** NAVEGACION *
	register_nav_menus([

			'menu_principal' => __("Menu principal", 'iglesia')

		]);

	add_action( 'wp_enqueue_scripts', 'church_styles');
	add_action( 'wp_enqueue_scripts', 'church_script');*/

	function church_styles() 
	{
		
		
		
		wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css");

		wp_enqueue_style('style', get_stylesheet_uri());
	}

	function church_script()
	{
		//PROMETO SOLUCIONAR ESTE PROBLEMA JEJEJEJEJE .-David
		//wp_enqueue_script('popper', get_stylesheet_directory_uri() . "/node_modules/popper.js/dist/popper.js");

		wp_enqueue_script('jquery3', "https://code.jquery.com/jquery-3.2.1.slim.min.js");
		wp_enqueue_script( 'popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js");
		wp_enqueue_script('bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js");
	}


	add_theme_support( 'post-thumbnails' );

	// Register Custom Navigation Walker
	require_once('class-wp-bootstrap-navwalker.php');

	/** NAVEGACION **/
	register_nav_menus([

			'menu_principal' => __("Menu principal", 'iglesia')

		]);

	add_action( 'wp_enqueue_scripts', 'church_styles');
	add_action( 'wp_enqueue_scripts', 'church_script');

?>