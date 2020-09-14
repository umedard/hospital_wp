<nav class="mobilenav" id="mobilemenu">
  <div class="mobilenav__menu" id="mobilemenu2">
    <div class="mobilenav__top">
      <div class="mobilenav__logo">logo </div>
      <button class="topbar__button mobilenav__close" id="menuClose">X</button>
    </div>
  
    <?php
        wp_nav_menu( array( 
            'theme_location' => 'main-menu-desktop', 
            'container_class' => 'nav-mobile',
            'menu_class'     => 'nav-mobile',
            'depth'           => 2 )); 
    ?>
  </div>
</nav>