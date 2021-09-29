archive
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

            <?php  $is_short_content = (is_category( 'Программирование' ) || is_category( 'Мысли' ));  ?>


            <?php  if (!$is_short_content) {  ?>
            <table>
                <thead>
                    <td class="archive">Категория</td>
                    <td class="archive">Название</td>
                    <td class="archive">Дата</td>
                </thead>
            <?php  }  ?>




            <?php
            /* Start the Loop */
            while (have_posts()) : the_post();
                ?>

<!--                Автор --><?php //the_author(); ?>
<!--                <a href="--><?php //the_permalink(); ?><!--"><H3>--><?php //the_title(); ?><!--</H3></a>-->
                <?php
//                if (has_category( 'Дневник' ) && (1 != get_current_user_id()) ) {
//                    continue;
//                }
                ?>

                <?php  if (!$is_short_content) {  ?>
                <tr>
                    <td class="archive"><?php the_category($separator = '/'); ?></td>
                    <td class="archive"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                    <td class="archive"><?php echo get_the_date(); ?></td>
<!--                    <td class="archive">--><?php //the_author(); ?><!--</td>-->
                </tr>
                <?php  }  ?>
<!--                <a href="--><?php //the_permalink(); ?><!--">-->
<!--                        ---><?php //the_category($separator = '/'); the_title(); the_author(); ?>

                <?php
//                if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); }
                //echo get_the_date() . ' '; the_time(); echo ' | '; the_category($separator = '/'); echo ' | '; the_tags(null, ', ');
                //the_excerpt();
                //the_content();
                ?>

                <?php  if ($is_short_content) {  ?>
                    <a href="<?php the_permalink(); ?>"><H3><?php the_title(); ?></H3></a>

                     <?php  the_content(); ?>
                <?php  }  ?>
                <?php
                get_template_part('template-parts/content', get_post_type());
                ?>
            <?php endwhile; ?>


            <?php  if (!$is_short_content) {  ?>
                </table>
            <?php  }  ?>

<?php

        //            posts_nav_link();
//            echo '<br> ';
//            previous_posts_link(); echo ' *** '; next_posts_link();
//            echo '<br> ';

//            the_posts_pagination();
//            echo paginate_links();

            the_posts_pagination( array(
                'show_all'     => false, // показаны все страницы участвующие в пагинации
                'end_size'     => 3,     // количество страниц на концах
                'mid_size'     => 3,     // количество страниц вокруг текущей
                'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                'prev_text'    => __('Назад'),
                'next_text'    => __('Далее'),
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


