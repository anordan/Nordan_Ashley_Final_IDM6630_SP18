<nav role="navigation">
  <div id="menuToggle">

    <input type="checkbox" />
    
    <span></span>
    <span></span>
    <span></span>
    
    <ul id="menu">
    <li><a href="<?php echo get_page_link( get_page_by_title( store )->ID ); ?>">Shop</a></li>
    <li><a href="<?php echo get_page_link( get_page_by_title( about )->ID ); ?>">About</a></li>
	<li><a href="<?php echo get_page_link( get_page_by_title( events )->ID ); ?>">Events</a></li>
    <li><a href="<?php echo get_page_link( get_page_by_title( contact )->ID ); ?>">Contact</a></li>
    </ul>
  </div>
</nav>