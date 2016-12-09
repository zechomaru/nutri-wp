<div class="col s10 l11">
  <div class="col s12">
    <nav style="background:none;box-shadow:none;">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo center hide-on-large-only">
          <img style="display:block; width:100px; margin-top:5px;" src="http://nutri.com.ec/wp-content/uploads/2014/09/logo.png" class="responsive-img">
        </a>
          <?php 
            wp_nav_menu(
              array(
                'theme_location' => 'menu-header',
                'container' => false,
                'menu_id' => 'nav-mobile',
                'menu_class' => 'left hide-on-med-and-down nav',
              )
            );

           ?>
      </div>
    </nav>
  </div>
 </div>

