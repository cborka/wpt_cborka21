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
    register_nav_menu( 'top_menu', 'Top Menu' );
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
    register_sidebar( array(
        'name'          => "Сайдбар 2",
        'id'            => "sidebar-2",
        'description'   => 'Описание сайдбара 2',
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s"> ',
        'after_widget'  => " </div>\n",
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => "</h3>\n",
        'myparampampam' => "А не пора ли нам напиться?",
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

?>

<?php
//    add_theme_support( 'custom-header' );
?>

<?php

// ЗДЕСЬ ПРОСТЕЙШИЙ ПРИМЕР ВИДЖЕТА

class Cbw_Widget extends WP_Widget {

//    public function __construct() {
//        // actual widget processes
//    }

    public function __construct() {
        parent::__construct(
            'cbw_widget', // Base ID
            'Cbw_Widget' // Name
//            array( 'description2' => 'Это учебно-тренировочный Cbw Widget', ) // Args
        );
    }

    // $args берутся из регистрации сайдбара в котором размещён виджет
    public function widget( $args, $instance ) {
        // outputs the content of the widget
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );

        echo $before_widget;
        if ( ! empty( $title ) ) {
            echo $before_title . $title . $after_title;
        }
        echo __( 'Hello, World!', 'text_domain' );
        ?>
<div style="color: red; ">Это виджет Cbw_Widget</div>
        <?php
        echo '= ' . $args['myparampampam'] . ' =';
        echo $after_widget;
    }

    public function form( $instance ) {
        // outputs the options form in the admin
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'text_domain' );
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <?php

    }

    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

        return $instance;

    }
}


add_action( 'widgets_init', 'wpdocs_register_widgets' );

function wpdocs_register_widgets()
{
    register_widget('Cbw_Widget');
}


?>

<?php

//  ПРИМЕР АДМИНИСТРАТИВНОГО МЕНЮ ИЗ УЧЕБНИКА

/** Step 2 (from text above).
 *  Регистрация в админ.меню функции внутри которой вызывается wp-функция создания меню
 */
add_action( 'admin_menu', 'my_menu' );

/** Step 1.
  Функция внутри которой должен быть вызов функции создания меню
 */
function my_menu() {
    add_options_page(
        'My Options',
        'Моё меню. Пример',     // Название
        'manage_options',       // Формирование страницы
        'my-unique-identifier',
        'my_options'
    );
}

/** Step 3.
    Формирование страницы, которая будет показана при выборе создаваемого пункта меню
 */
function my_options() {
    if ( !current_user_can( 'manage_options' ) ) {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    echo 'Here is where I output the HTML for my screen.<br>';
    echo 'Это пример создания подпункта меню.';
    echo '</div><pre>';
}

?>