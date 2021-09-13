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
<div class="grid-container">

    <?php get_header(); ?>

    <main class="" >
        main
    </main>

    <?php get_footer(); ?>


    <?php get_sidebar(); ?>
<!--        --><?php //get_sidebar("right"); ?>


    <aside  class="right">
        Правая панель
        конец сайдбара
    </aside>


<!--    <script src="js/init.js"></script>-->
<!--    //    alert("aaa");-->

</div>
</body>

</html>