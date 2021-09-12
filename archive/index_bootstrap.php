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
<?php get_header(); ?>

<main  class="container-fluid ">
    <div class="row">
        <div class="col-md-3 col-lg-2 pink">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-md-9 col-lg-7 white">
            Центр Одна из трёх колонок
        </div>
        <div class="col-md-12 col-lg-3 pink">
            Право Одна из трёх колонок
        </div>
    </div>
</main>

<?php get_footer(); ?>


<!--<!--        -->--><?php ////get_sidebar(); ?>
<!--    <!--    -->--><?php ////get_sidebar("right"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!-- <script src="js/init.js"></script> -->

</body>

</html>