page
<?php get_header(); ?>

<main>
    <section id="intro">
        <div>Страница 1</div>

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