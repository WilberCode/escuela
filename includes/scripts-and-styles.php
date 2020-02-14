<?php


use WpTailwindCssThemeBoilerplate\AssetResolver;


add_action( 'wp_enqueue_scripts', function () {

	// registers scripts and stylesheets
	wp_register_style( 'app', AssetResolver::resolve( 'css/app.css' ), [], false );
 	wp_register_script( 'app', AssetResolver::resolve( 'js/app.js' ), [], false, true );
 	  // enqueue global assets
	wp_enqueue_style('fontawesome',"https://use.fontawesome.com/releases/v5.0.13/css/all.css"); 
	wp_enqueue_style('font-lato',"https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap"); 
  
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'app' ); 
	wp_enqueue_script( 'app' ); 


} );