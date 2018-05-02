<?php get_template_part('top-nav'); ?>
<?php
define( 'WP_USE_THEMES', false ); 
get_header(); ?>
<div class="shop-page">
    <h1>Shop</h1>
</div>
<?php 
$get_products =new WP_Query($product_post_type_query);

if (have_posts() ) : while (have_posts() ) : the_post(); ?>
   
      <div <?php post_class(); ?>>
    <?php the_post_thumbnail(); ?><br>

    <div class="single">
 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

       <p><?php the_field('description'); ?></p>
         <p><?php the_field('dimensions'); ?></p>
           <p><?php the_field('price'); ?></p>
         <div class="button"><a href="#">Add to Cart</a></div>
        </div>
</div>
</div>
<?php get_footer(); ?>
    <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>