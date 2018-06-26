<?php /*
<header class="banner">
  <div class="container text-center">
    <!--<a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="/wp-content/themes/rough-hands/dist/images/logo_long.png" alt="Rough Hands Barbershop logo" /></a>-->
    <nav class="navbar navbar-dark nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        $items = wp_get_nav_menu_items('Main Menu');
        foreach ($items as $item) {
            if ($item->title !== 'Logo') {
                $item->class = 'text-link';
            }
        }
        $main = wp_nav_menu(['menu' => $items, 'echo' => false, 'theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav nav justify-content-center']);
        $main = str_replace('Logo', '<img src="/wp-content/themes/rough-hands/dist/images/logo_long.png" />', $main);
        echo $main;
      endif;
      ?>
    </nav>
  </div>
</header>
*/ ?>
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
