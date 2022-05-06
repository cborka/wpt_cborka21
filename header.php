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
            <?php if ($_SERVER['REQUEST_URI'] <> '/') {?>
                <a title="На главную" href="/"><img class="logoimg" src="<?php echo get_template_directory_uri(); ?>/img/logo-globus.png" alt="Logo" /></a>
            <?php } else { ?>
                <img class="logoimg" src="<?php echo get_template_directory_uri(); ?>/img/logo-globus.png" alt="<?php echo get_template_directory_uri(); ?>" />
             <?php } ?>
        </div>


        <div class="hd2">
            <p class="titul"><span class="meta">Блог</span><span class="poznanie">62</span></p>
        </div>



<!--        <div  class="white">-->
<!--            <a href="--><?php //echo home_url() ?><!--" >Блог "--><?php //bloginfo("Name") ?><!--" </a>-->
<!---->
<!--            <button visible="true" onclick="show_hide_sidebar()">E</button>-->
<!--        </div>-->

        <!-- Rating Mail.ru counter -->
        <script type="text/javascript">
            var _tmr = window._tmr || (window._tmr = []);
            _tmr.push({id: "3249341", type: "pageView", start: (new Date()).getTime()});
            (function (d, w, id) {
                if (d.getElementById(id)) return;
                var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
                ts.src = "https://top-fwz1.mail.ru/js/code.js";
                var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
                if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
            })(document, window, "topmailru-code");
        </script><noscript><div>
                <img src="https://top-fwz1.mail.ru/counter?id=3249341;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
            </div></noscript>
        <!-- //Rating Mail.ru counter -->

    </header>