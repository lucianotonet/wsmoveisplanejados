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
	    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/bower_components/owl-carousel/owl-carousel/owl-carousel.css', array(), null );

        wp_enqueue_style( 'responsive-style', get_template_directory_uri() . '/css/responsive.css', array(), null );        
        wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/style.css', array(), null );     
        wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', array(), null );       


        /**
         *      JS
         */
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array(), null, true );        
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array('jquery'), null, true );        
        wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/easing.js', array('jquery'), null, true );
        wp_enqueue_script( 'move-top', get_template_directory_uri() . '/js/move-top.js', array('jquery'), null, true );
        wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/bower_components/owl-carousel/owl-carousel/owl-carousel.min.js', array('jquery'), null, true );
	    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true );	    

	}
	add_action( 'wp_enqueue_scripts', 'wsmoveisplanejados_scripts' );

/**
 * Function to register the names of our menus
 * @return [type] [description]
 */
function register_wsmoveisplanejados_menus() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Menu principal' )			)
		);
}
add_action( 'init', 'register_wsmoveisplanejados_menus' );


// SUPORTE À IMAGEM DESTACADA
add_theme_support('post-thumbnails');
// Suporte à resumos em Páginas
add_post_type_support( 'page', 'excerpt' );


/**
 * POST TYPE SERVIÇO
 */
if ( ! function_exists('wsmoveisplanejados_product_post_type') ) {

// Register Custom Post Type
function wsmoveisplanejados_product_post_type() {

	$labels = array(
		'name'                  => _x( 'Produtos', 'Post Type General Name', 'wsmoveisplanejados' ),
		'singular_name'         => _x( 'Produto', 'Post Type Singular Name', 'wsmoveisplanejados' ),
		'menu_name'             => __( 'Produtos', 'wsmoveisplanejados' ),
		'name_admin_bar'        => __( 'Produtos', 'wsmoveisplanejados' ),
		'archives'              => __( 'Arquivo', 'wsmoveisplanejados' ),
		'parent_item_colon'     => __( 'Produto pai:', 'wsmoveisplanejados' ),
		'all_items'             => __( 'Todos itens', 'wsmoveisplanejados' ),
		'add_new_item'          => __( 'Adicionar novo produto', 'wsmoveisplanejados' ),
		'add_new'               => __( 'Adicionar novo', 'wsmoveisplanejados' ),
		'new_item'              => __( 'Novo produto', 'wsmoveisplanejados' ),
		'edit_item'             => __( 'Editar produto', 'wsmoveisplanejados' ),
		'update_item'           => __( 'Atualizar produto', 'wsmoveisplanejados' ),
		'view_item'             => __( 'Ver item', 'wsmoveisplanejados' ),
		'search_items'          => __( 'Procurar item', 'wsmoveisplanejados' ),
		'not_found'             => __( 'Nada encontrado', 'wsmoveisplanejados' ),
		'not_found_in_trash'    => __( 'Nada econtrado na lixeira', 'wsmoveisplanejados' ),
		'featured_image'        => __( 'Imagem em destaque', 'wsmoveisplanejados' ),
		'set_featured_image'    => __( 'Selecione a imagem em destaque', 'wsmoveisplanejados' ),
		'remove_featured_image' => __( 'Remover imagem em destaque', 'wsmoveisplanejados' ),
		'use_featured_image'    => __( 'Usar como imagem em destaque', 'wsmoveisplanejados' ),
		'insert_into_item'      => __( 'Inserir no produto', 'wsmoveisplanejados' ),
		'uploaded_to_this_item' => __( 'Enviado para este item', 'wsmoveisplanejados' ),
		'items_list'            => __( 'Lista de produtos', 'wsmoveisplanejados' ),
		'items_list_navigation' => __( 'Lista de produtos', 'wsmoveisplanejados' ),
		'filter_items_list'     => __( 'Filtrar lista de produtos', 'wsmoveisplanejados' ),
	);
	$rewrite = array(
		'slug'                  => 'produtos',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Produto', 'wsmoveisplanejados' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'editor', 'revisions', 'page-attributes', ), //'editor', 'excerpt', 'author', 
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',

        'show_in_rest'          => true,
        'rest_base'             => 'products',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'wsmoveisplanejados_product_post_type', 0 );

}


/**
 *  META BOXES FOR PRODUCTS
 */
add_filter( 'rwmb_meta_boxes', 'wsmoveisplanejados_product_meta_boxes' );
function wsmoveisplanejados_product_meta_boxes( $meta_boxes ) {
    
    $prefix = 'wsmoveisplanejados_';

    $section = 'product_';
    $meta_boxes[] = array(
        'title'      => __( 'Detalhes', 'wsmoveisplanejados' ),
        'post_types' => 'product',

        'fields'     => 
        array(        
                // WYSIWYG/RICH TEXT EDITOR
                array(
                    'name'    => __( 'Ref', 'wsmoveisplanejados' ),
                    'id'      => $prefix.$section."ref",
                    'type'    => 'text',
                    // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                    'raw'     => false,
                    'std'     => __( '', 'wsmoveisplanejados' ),                    
                ),
                // WYSIWYG/RICH TEXT EDITOR
                array(
                    'name'    => __( 'Altura', 'wsmoveisplanejados' ),
                    'id'      => $prefix.$section."alt",
                    'type'    => 'text',
                    // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                    'raw'     => false,
                    'std'     => __( '', 'wsmoveisplanejados' ),
                    // Editor settings, see wp_editor() function: look4wp.com/wp_editor
                    'options' => array(
                        'textarea_rows' => 10,
                        'teeny'         => false,
                        'media_buttons' => true,
                    ),
                ),
                // WYSIWYG/RICH TEXT EDITOR
                array(
                    'name'    => __( 'Largura', 'wsmoveisplanejados' ),
                    'id'      => $prefix.$section."larg",
                    'type'    => 'text',
                    // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                    'raw'     => false,
                    'std'     => __( '', 'wsmoveisplanejados' ),
                    // Editor settings, see wp_editor() function: look4wp.com/wp_editor
                    'options' => array(
                        'textarea_rows' => 10,
                        'teeny'         => false,
                        'media_buttons' => true,
                    ),
                ),
                // WYSIWYG/RICH TEXT EDITOR
                array(
                    'name'    => __( 'Profundidade', 'wsmoveisplanejados' ),
                    'id'      => $prefix.$section."prof",
                    'type'    => 'text',
                    // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                    'raw'     => false,
                    'std'     => __( '', 'wsmoveisplanejados' ),
                    // Editor settings, see wp_editor() function: look4wp.com/wp_editor
                    'options' => array(
                        'textarea_rows' => 10,
                        'teeny'         => false,
                        'media_buttons' => true,
                    ),
                ),               
                // COLOR
                array(
                    'name' => __( 'Cor', 'wsmoveisplanejados' ),
                    'id'   => $prefix.$section."color",
                    'type' => 'color',
                ),
                array(
                    'id'               => $prefix.$section.'bgimage',
                    'name'             => __( 'Imagem de fundo', 'wsmoveisplanejados' ),
                    'type'             => 'file_advanced',
                    // Delete image from Media Library when remove it from post meta?
                    // Note: it might affect other posts if you use same image for multiple posts
                    'force_delete'     => false,
                    // Maximum image uploads
                    'max_file_uploads' => 1,
                ),

                                        
            ),
    ); 

    $section = 'section_gallery_';
    $meta_boxes[] = array(
        'title'      => __( 'Imagens', 'wsmoveisplanejados' ),
        'post_types' => 'product',

        'fields'     => array(                       
            array(
                'id'               => $prefix.$section.'images',
                'name'             => __( 'Imagens', 'wsmoveisplanejados' ),
                'type'             => 'image_advanced',
                // Delete image from Media Library when remove it from post meta?
                // Note: it might affect other posts if you use same image for multiple posts
                'force_delete'     => false,
                // Maximum image uploads
                'max_file_uploads' => 10,
            ),                                    
        ),  
    );   


    return $meta_boxes;
}
