single
    <?php get_header("single"); ?>

    <main>
        <section id="intro">
            <div>Пост</div>
        </section>


        <?php the_post(); ?>
        Автор <?php the_author(); ?>
        <a href="<?php the_permalink(); ?>"><H3><?php the_title(); ?></H3></a>

        <?php
        //                if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); }
        echo get_the_date() . ' '; the_time(); echo ' | '; the_category($separator = '/'); echo ' | '; the_tags(null, ', ');

        the_content();

        if (post_type_exists('post')) {
            echo ' <br>x '. get_post_type();
        }

        previous_post_link('%link', '<< %title | ');
        next_post_link('%link', ' %title >>');

//        echo '<br>' . get_theme_file_path( 'images/logo.png' );
//        echo '<br>' . get_parent_theme_file_path( 'images/logo.png' );

//        get_template_part( 'bebebe' ); // include bebebe.php
        ?>


    </main>


    <?php get_sidebar("right"); ?>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
