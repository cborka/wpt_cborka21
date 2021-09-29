<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
<!--    <title>Тема wordpress cborka21</title>-->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <meta name="description" content="Тема для wordpress">
    <meta name="author" content="cborka">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="favicon.ico" >

    <?php wp_head() ?>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />

</head>

<body>
<div class="grid-container">
    <header class="">

        <!--// ЛОГОТИП -->
        <div class="logo">
            <?php
            if ($_SERVER['REQUEST_URI'] <> '/')
            {
                echo '<a title="На главную" href="/"><img src="/img/mp21.bmp" alt="Logo" /></a>';
            }
            else
            {
                echo '<img src="/img/mp21.bmp" alt="" />';
            }
            ?>
        </div>


        <div class="hd2">
            <p class="titul"><span class="meta">МЕТА</span><span class="poznanie">ПОЗНАНИЕ</span></p>
        </div>



        <div  class="white">
            <div><a href="<?php echo home_url() ?>" >Блог "<?php bloginfo("Name") ?>" </a></div>
        </div>

        <button visible="true" onclick="show_hide_sidebar()">E</button>


    </header>