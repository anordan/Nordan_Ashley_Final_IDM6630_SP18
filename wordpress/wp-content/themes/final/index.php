<?php get_template_part('top-nav'); ?>
<?php
define( 'WP_USE_THEMES', false ); 
get_header(); ?>

    <main>
    <?php get_template_part('loop'); ?>
    </main>
<?php get_footer(); ?>
