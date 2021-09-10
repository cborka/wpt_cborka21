<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <title>Тема wordpress cborka21</title>

    <meta name="description" content="Тема для wordpress">
    <meta name="author" content="cborka">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="favicon.ico" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <?php wp_head() ?>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />

</head>

<body>

    <div class="grid-container">
        <?php get_header(); ?>



        <div class="container">
            <div class="row">
                <div class="col-sm-3 primary">col-sm-3</div>
                <div class="col-sm-8 success">col-sm-8</div>
                <div class="col-sm-4 warning">col-sm-4</div>
            </div>
        </div>

        <main>
            <section id="intro">
                <div>Привет, мир!</div>
            </section>




        </main>






<!--        --><?php //get_sidebar(); ?>
    <!--    --><?php //get_sidebar("right"); ?>
        <?php get_footer(); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- <script src="js/init.js"></script> -->

</body>

</html>