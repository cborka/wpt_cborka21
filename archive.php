
    <?php get_header("page"); ?>

    <main>
        <section id="intro">
            <div>Архив записей</div>
        </section>


        <?php if (have_posts()) : ?>

            <header class="page-header">
                <?php
                the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="archive-description">', '</div>');
                ?>
            </header><!-- .page-header -->

            <?php
            /* Start the Loop */
            while (have_posts()) : the_post();
                ?>

                Автор <?php the_author(); ?>
                <a href="<?php the_permalink(); ?>"><H3><?php the_title(); ?></H3></a>

                <?php
//                if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); }
                echo get_the_date() . ' ';
                the_time();
                the_category($separator = '/');
                the_tags(null, ', ');
                the_excerpt();
                //the_content();
                get_template_part('template-parts/content', get_post_type());

            endwhile;

            the_posts_pagination( array(
                'show_all'     => false, // показаны все страницы участвующие в пагинации
                'end_size'     => 1,     // количество страниц на концах
                'mid_size'     => 1,     // количество страниц вокруг текущей
                'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                'prev_text'    => __('<<'),
                'next_text'    => __('>>'),
                'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                'screen_reader_text' => __( ' ' )
            ));

        else : //if (have_posts())
            echo 'Здесь нет записей.';
            get_template_part('template-parts/content', 'none');

        endif; //if (have_posts())
        ?>


    </main>


    <?php get_sidebar(); ?>
    <?php get_sidebar("right"); ?>
    <?php get_footer(); ?>


