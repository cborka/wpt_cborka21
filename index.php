<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <title>Тема wordpress cborka21</title>

    <meta name="description" content="Тема для wordpress">
    <meta name="author" content="cborka">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="favicon.ico" >

    <?php wp_head() ?>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />

</head>

<body>

    <?php get_header(); ?>

    <main id="left_sidebar" class="" >
        <?php get_sidebar(); ?>
        <br>
        <br>
        <br>
    </main>

    <?php get_footer(); ?>


<!--<!--        -->--><?php ////get_sidebar(); ?>
<!--    <!--    -->--><?php ////get_sidebar("right"); ?>

    <script src="js/init.js"></script>
<!--    //    alert("aaa");-->


</body>

</html>