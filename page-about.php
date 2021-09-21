<?php get_header();
/*
Template Name: About layout
Template Post Type: post, page, event
*/
?>
<main>
    <section id="intro">
        <div>Страница о сайте</div>

        <?php the_post(); ?>
        <H3><?php the_title(); ?></H3>

        <?php
        //                if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); }
        echo get_the_date() . ' '; the_time();

        the_content();

        ?>

    </section>
</main>



<?php get_sidebar(); ?>
<?php get_sidebar("right"); ?>
<?php get_footer(); ?>