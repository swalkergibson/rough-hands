<header class="banner">
  <div class="container text-center">
    <!--<a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="/wp-content/themes/rough-hands/dist/images/logo_long.png" alt="Rough Hands Barbershop logo" /></a>-->
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        $items = wp_get_nav_menu_items('Main Menu');
        foreach ($items as $item) {
            if ($item->title !== 'Logo') {
                $item->class = 'text-link';
            }
        }
        $main = wp_nav_menu(['menu' => $items, 'echo' => false, 'theme_location' => 'primary_navigation', 'menu_class' => 'nav justify-content-center']);
        $main = str_replace('Logo', '<img src="/wp-content/themes/rough-hands/dist/images/logo_long.png" />', $main);
        echo $main;
      endif;
      ?>
    </nav>
  </div>
</header>
