<?php
//esc_html__ - элементы которые будут переведены, можно сносить и оставлять текст

//создаем константу функции, что бы не производить функцию в каждом подключении
define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');


// advanced custom fields header-footer edit
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	acf_add_options_sub_page('Header-Footer');	
} 



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
			//'search-form',
			//'comment-form',
			//'comment-list',
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

	wp_enqueue_style('all.min.css', THEME_DIR . '/build/css/all.min.css');

	wp_enqueue_script('jquery.fn.uiModal', THEME_DIR . '/js/jquery.fn.uiModal.js', array("jquery"), '', true);

	wp_enqueue_script('slick.min', THEME_DIR . '/js/slick.min.js', array("jquery"), '', true);

	wp_enqueue_script('jquery.maskedinput.min', THEME_DIR . '/js/jquery.maskedinput.min.js', array("jquery"), '', true);

	wp_enqueue_script('all.script', THEME_DIR . '/js/all.js', array("jquery"), '', true); 
//___________________________

	wp_enqueue_script( 'happ-navigation', THEME_DIR . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'happ-skip-link-focus-fix', THEME_DIR . '/js/skip-link-focus-fix.js', array(), '20151215', true );



	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'happ_scripts' );



function remove_admin_menu() {
	// remove_menu_page('options-general.php'); // Удаляем раздел Настройки	
  	remove_menu_page('tools.php'); // Инструменты
	// remove_menu_page('users.php'); // Пользователи
	// remove_menu_page('plugins.php'); // Плагины
	// remove_menu_page('themes.php'); // Внешний вид	
	remove_menu_page('edit.php'); // Посты блога
	// remove_menu_page('upload.php'); // Медиабиблиотека
	// remove_menu_page('edit.php?post_type=page'); // Страницы
	remove_menu_page('edit-comments.php'); // Комментарии	
	// remove_menu_page('link-manager.php'); // Ссылки
  	// remove_menu_page('wpcf7');   // Contact form 7
	// remove_menu_page('options-framework'); // Cherry Framework
}
add_action('admin_menu', 'remove_admin_menu');



