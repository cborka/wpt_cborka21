<?php

add_action( 'wp_footer', 'theme_add_scripts' );

// wp_footer
function theme_add_scripts() {

// подключаем js файлы темы
wp_enqueue_script( 'init', get_template_directory_uri() .'/js/init.js' );

//wp_enqueue_script( 'script-name', get_template_directory_uri() .'/js/example.js', array(), '1.0', true );
}