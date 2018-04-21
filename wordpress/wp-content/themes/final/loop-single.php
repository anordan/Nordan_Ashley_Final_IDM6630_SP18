<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <a href="<?php the_permalink(); ?>">
       <article <?php post_class(); ?>>
            <?php the_title('<h2>','</h2>'); ?></a>
            <h3><?php the_author();?></h3>
            <?php the_content(); ?>
        </article>
    <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>