<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<body <?php body_class(); ?>>
 
<main>
    <section>
   <?php get_template_part('loop-single'); ?>
    </section>
</main>
<?php get_footer(); ?>
</body>
