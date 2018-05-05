<?php get_template_part('top-nav'); ?>
<?php
define( 'WP_USE_THEMES', false ); 
get_header(); ?>
<div class="home-page">
    <h1>Vintage Goods</h1>
</div>

   <h4>New Arrivals</h4>
    <main>
    <?php get_template_part('loop'); ?>
    </main>
    <div class="button-2"><a href="#">See More Products</a></div>
<?php get_footer(); ?>
