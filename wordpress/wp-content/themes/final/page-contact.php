<?php get_template_part('top-nav'); ?>
<?php
define( 'WP_USE_THEMES', false ); 
get_header(); ?>
<div class="contact-page">
    <h1>Contact</h1>
</div>
<div class="contact">
	
    <div class="container">
    <h2>Say Hello!</h2>
<form action="/action_page.php">

  
  <input type="text" id="fname" name="firstname" placeholder="First and Last Name">

  
  <input type="text" id="email" name="email" placeholder="Email">


  
  <textarea id="subject" name="subject" placeholder="Subject" style="height:200px"></textarea>

  <input type="submit" value="Submit">
</div>
</form>
</div>
<?php get_footer(); ?>
