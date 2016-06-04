<?php 
	/**
	 * 	ENQUEUE STYLES AND SCRIPTS	
	 */
	function wsmoveisplanejados_scripts() {	    

		/**
		 * 		CSS
		 */		
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css', array(), null );        		
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/bower_components/font-awesome/css/font-awesome.min.css', array(), null );        		

		// wp_enqueue_style( 'fonts', get_template_directory_uri() . '/fonts/stylesheet.css', array(), null );	    
		wp_enqueue_style( 'fonts', get_template_directory_uri() . '/fonts/fonts.css', array(), null );	    
		wp_enqueue_style( 'responsive-style', get_template_directory_uri() . '/css/responsive.css', array(), null );	    
		wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/style.css', array(), null );	    
		wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', array(), null );	    


	    /**
	     * 		JS
	     */
	    wp_enqueue_script( 'jquery' );
	    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array('jquery'), null, true );        
	    wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/easing.js', array('jquery'), null, true );
	    wp_enqueue_script( 'move-top', get_template_directory_uri() . '/js/move-top.js', array('jquery'), null, true );
	    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true );	    

	}
	add_action( 'wp_enqueue_scripts', 'wsmoveisplanejados_scripts' );