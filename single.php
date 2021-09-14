
    <?php get_header("single"); ?>

    <main>
        <section id="intro">
            <div>Пост</div>
        </section>


        Post
        <?php the_post(); ?>
        Автор <?php the_author(); ?>
        <a href="<?php the_permalink(); ?>"><H3><?php the_title(); ?></H3></a>

        <?php
        //                if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); }
        echo get_the_date() . ' ';
        the_time();
        the_category($separator = '/');
        the_tags(null, ', ');

        the_content();


        ?>


    </main>


    <?php get_sidebar("right"); ?>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
