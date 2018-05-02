
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article <?php post_class(); ?>>
       <a href="<?php the_permalink(); ?>">
    <div class="shop-page">
    <h1><a href=" http://localhost/Nordan_Ashley_Final_IDM6630_SP18/wordpress/store/">Shop</h1></a>
    </div> 
    
    <div class="about-page">
    <h1><a href=" http://localhost/Nordan_Ashley_Final_IDM6630_SP18/wordpress/about/">About</h1></a>
    </div>
        
    <div class="events-page">
    <h1><a href=" http://localhost/Nordan_Ashley_Final_IDM6630_SP18/wordpress/events/">Events</h1></a>
    </div>

    <div class="contact-page">
    <h1><a href=" http://localhost/Nordan_Ashley_Final_IDM6630_SP18/wordpress/contact/">Contact</h1></a>
    </div>
        </article>
        <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>