404
<?php get_header(); ?>

<main>
    <section id="intro">
        <div>
            Ошибочка вышла, такой страницы не существует!!!
            <p>Блог работает на WordPress версии <?php bloginfo('version'); ?></p>
        </div>
    </section>
</main>



<?php get_sidebar(); ?>
<?php get_sidebar("right"); ?>
<?php get_footer(); ?>