<?php 
$product_post_type_query =array(
    'post-type' => 'product',
    'post-status' => 'publish',
);

$get_products =new WP_Query($product_post_type_query);

if ( $get_products->have_posts() ) : while ( $get_products->have_posts() ) : $get_products->the_post(); ?>
      
       <?php post_class(); ?>
       <a href="<?php the_permalink(); ?>"></a>
       <?php the_title('<h2>', '</h2>'); the_post_thumbnail(); ?>
            
       
       <p><?php the_field('description'); ?></p>
         <p><?php the_field('size'); ?></p>
           <p><?php the_field('price'); ?></p>
        
    
    <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>