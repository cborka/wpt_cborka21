<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>
        <?php echo wp_get_document_title(); ?>
    </title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

    <?php wp_head(); ?>
</head>

<body>
<header class="header">
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
</header>

<div class="middle">
    <?php
    // циклы вывода записей
    // если записи найдены
    if ( have_posts() ){
        while ( have_posts() ){
            the_post();

            echo '<h3><a href="'. get_permalink() .'">'. get_the_title() .'</a></h3>';

            echo get_the_excerpt();
        }
    }
    // записей не найдено
    else{
        echo ' <p>Записей нет...</p>';
    }
    ?>
</div>

<footer class="footer">
    <?php echo date('Y') ?> © cborka 21 3
</footer>

<?php wp_footer(); ?>
</body>

</html>