<?php

if ( ! function_exists( 'cborka21_setup' ) ) :
    function cborka21_setup() {
        // echo 'setup';
// Рекомендации из учебника
//        load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
//        add_theme_support( 'automatic-feed-links' );   // Add default posts and comments RSS feed links to <head>
//        add_theme_support( 'post-thumbnails' );
//        register_nav_menus( array(
//            'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
//            'secondary' => __('Secondary Menu', 'myfirsttheme' )
//        ) );
//        add_theme_support( 'post-formats', array ( 'gallery', 'quote', 'image', 'video' ) );

// Из видео примеры
//    register_nav_menu( 'top', 'Top Menu' );
//    register_nav_menu( 'bottom', 'Bottom Menu' );
//
    add_theme_support('title-tag');
//    add_theme_support('post-thumbnails', array( 'post' ) );


    }
endif;
add_action( 'after_setup_theme', 'cborka21_setup' );

// правильный способ подключить стили и скрипты темы
add_action( 'wp_enqueue_scripts', 'theme_add_syles' );
add_action( 'wp_footer', 'theme_add_scripts' );
add_action( 'widgets_init', 'register_my_widgets' );

// widgets_init
function register_my_widgets(){
    register_sidebar( array(
        'name'          => "Сайдбар 1",
        'id'            => "sidebar-1",
        'description'   => 'Описание сайдбара 1',
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => "</h3>\n",
    ) );
}


// wp_enqueue_scripts
function theme_add_syles() {

    // подключаем файлы стилей темы
    wp_enqueue_style( 'style',  get_stylesheet_uri() );  // подключение style.css
//    wp_enqueue_style( 'default',  get_template_directory_uri() . "/assets/css/default.css" );
}

// wp_footer
function theme_add_scripts() {

    // подключаем js файлы темы
    wp_enqueue_script( 'init', get_template_directory_uri() .'/js/theme.js' );

    //wp_enqueue_script( 'script-name', get_template_directory_uri() .'/js/example.js', array(), '1.0', true );
}

