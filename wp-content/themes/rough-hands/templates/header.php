<header class="banner">
  <div class="container">
    <nav class="navbar navbar-dark bg-dark nav-primary navbar-expand-md bg-transparent">
      <a href="/" class="navbar-brand d-md-none"><img src="/wp-content/themes/rough-hands/dist/images/logo_medium.png" alt="Rough Hands mobile logo" /></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="modal" data-target="#menuModal" aria-controls="menuModal" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse justify-content-center" id="mainMenu">
      <?php
      if (has_nav_menu('primary_navigation')) :
        $main = wp_nav_menu(['echo' => false, 'theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav nav']);
        $main = str_replace('Logo', '', $main);
        echo $main;
      endif;
      ?>
      </div>
    </nav>
  </div>
</header>
