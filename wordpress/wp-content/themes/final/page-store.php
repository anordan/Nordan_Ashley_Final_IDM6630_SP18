<?php get_template_part('top-nav'); ?>
<?php
define( 'WP_USE_THEMES', false ); 
get_header(); ?>
<div class="shop-page">
    <h1>Shop</h1>
    
</div>
    <main>
    <?php get_template_part('loop-store'); ?>
    </main>
<?php get_footer(); ?>
