<?php

	function church_styles() 
	{
		

		wp_enqueue_style('normalize', get_stylesheet_directory_uri() . "/node_modules/normalize.css/normalize.css");

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

	add_action( 'wp_enqueue_scripts', 'church_styles');
	add_action( 'wp_enqueue_scripts', 'church_script');

	/** NAVEGACION **/
	register_nav_menus([

			'menu_principal' => __("Menu principal", 'iglesia')

		]);
?>