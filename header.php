<header class="header">

        <div><a href="<?php echo home_url() ?>" >Блог "<?php bloginfo("Name") ?>" </a></div>
        <!--    <button visible="false" onclick="show_hide_sidebar()">E</button>-->


</header>
<hr>
<?php wp_nav_menu( [
    'theme_location'  => 'top'
] );
?>
