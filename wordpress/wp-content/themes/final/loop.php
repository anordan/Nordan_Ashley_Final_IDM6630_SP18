<?php
$product_post_type_query =array(
    'post_type' => 'product',
    'post_status' => 'publish',
    'posts_per_page' => '6',
);

$get_products =new WP_Query($product_post_type_query);

if ( $get_products->have_posts() ) : while ( $get_products->have_posts() ) : $get_products->the_post(); ?>
<div class= "loop"> 
      <div <?php post_class(); ?>>
      <?php the_post_thumbnail(); ?><br>
 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>
</div>
        <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>