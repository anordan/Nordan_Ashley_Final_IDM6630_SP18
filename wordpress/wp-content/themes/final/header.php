<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo get_bloginfo('name'); ?></title>
<link href="https://fonts.googleapis.com/css?family=Do+Hyeon|Montserrat|Poiret+One" rel="stylesheet">
<script src="https://use.fontawesome.com/506df0e47b.js"></script>
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header>
<div class="bars">
    <i class="fas fa-bars"></i>
</div>
<h1><a href="<?php echo home_url();?>"><?php echo get_bloginfo('name'); ?></a></h1>
    <h2><?php echo get_bloginfo('description'); ?></h2>
  
</header>

