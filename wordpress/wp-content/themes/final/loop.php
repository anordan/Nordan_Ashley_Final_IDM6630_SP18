<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
       <article <?php post_class(); ?>>
       <a href="<?php the_permalink(); ?>">
            <?php the_title('<h2>','</h2>'); ?></a>
        
        </article>
    <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>