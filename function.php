<?php
	function my_assets() {
		wp_enqueue_style( 'style', get_stylesheet_uri(), array());
		wp_enqueue_style( 'my_style', get_stylesheet_directory_uri() . '/css/my_style.css' );
		
		wp_register_style('glyphicons', 'http://fontawesome.io/assets/font-awesome/css/font-awesome.css');
		wp_enqueue_style( 'glyphicons');
		
		wp_enqueue_script( 'my_jquery', get_stylesheet_directory_uri() . '/js/jquery-2.2.4.min.js', array(), '2.2.4', true);
		wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.js', array( 'my_jquery' ), '3.3.6', true);
		wp_enqueue_script( 'my_script', get_stylesheet_directory_uri() . '/js/my-script.js', array(), '1.0.0', true);
	}
	add_action( 'wp_enqueue_scripts', 'my_assets' );
?>