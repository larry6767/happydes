<?php
//esc_html__ - элементы которые будут переведены, можно сносить и оставлять текст


//установка шаблоном по умолчанию шаблона добавления проекта
function change_default_page_template() {
    global $post;
    if ( 'page' == $post->post_type 
        && 0 != count( get_page_templates( $post ) ) 
        && get_option( 'page_for_posts' ) != $post->ID // Not the page for listing posts
        && '' == $post->page_template // Only when page_template is not set
    ) {
        $post->page_template = "project-page.php";
    }
}
add_action('add_meta_boxes', 'change_default_page_template', 1);



function happ_setup() {
		
		//автоустановка тега title на страницы
		add_theme_support( 'title-tag' );

		//миниатюры статей
		add_theme_support( 'post-thumbnails' );

		//регистрация меню
		register_nav_menus( array(
			'Primary' => esc_html__( 'Primary', 'happ' ),
		) );

		//компоненты, которые поддерживает тема
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}
add_action( 'after_setup_theme', 'happ_setup' );



function happ_scripts() {
	wp_enqueue_style( 'happ-style', get_stylesheet_uri() );

// custom connect______________
		// font was connect in header.php,else if connects fonts here - when open in opera after 0,5 sec client seen, how changing fonts on header - seems like a shit
		//wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Comfortaa:300,400,700&amp;subset=cyrillic');

	wp_enqueue_style('all.min.css', get_template_directory_uri() . '/build/css/all.min.css');

	wp_enqueue_script('jquery.fn.uiModal', get_template_directory_uri() . '/js/jquery.fn.uiModal.js', array("jquery"), '', true);

	wp_enqueue_script('slick.min', get_template_directory_uri() . '/js/slick.min.js', array("jquery"), '', true);

	wp_enqueue_script('jquery.maskedinput.min', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array("jquery"), '', true);

	wp_enqueue_script('all.script', get_template_directory_uri() . '/js/all.js', array("jquery"), '', true); 
//___________________________

	wp_enqueue_script( 'happ-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'happ-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'happ_scripts' );


//add_filter( 'nav_menu_css_class' , 'filter_header_menu_css_without_js');  
