<footer>
<div class="jumbotron mb-0">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-2">
                <img src="/wp-content/themes/rough-hands/dist/images/location_img_invert.png" alt="Barbershop location image" />
            </div>
            <div class="col-xs-6 col-md-3">
                <div id="footer-contact-box">
                    <p><em>Contact:</em></p>
                    <address class="mb-3">
                        Rough Hands Barber Shop<br />
                        8 Walton City<br />
                        Imperial Beach<br />
                        WA 57431
                    </address>
                    <p><a href="tel:7-(145)210-7757">7-(145)210-7757<br /><a href="mailto:heyguys@rough-hands.com">heyguys@rough-hands.com</a></p>
                </div>
            </div>
            <div class="col-xs-12 col-md-2">
                <p><em>Page:</em></p>
                <nav>
                <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                endif;
                ?>
                </nav>
            </div>
            <div class="col-xs-12 col-md-2">
                <p><em>Various:</em></p>
                <nav>
                <?php
                if (has_nav_menu('footer_secondary')) :
                    wp_nav_menu(['theme_location' => 'footer_secondary', 'menu_class' => 'nav']);
                endif;
                ?>
                </nav>
            </div>
            <div class="col-xs-12 col-md-2">
                <p><em>Social:</em></p>
                <nav>
                <?php
                if (has_nav_menu('footer_social')) :
                    wp_nav_menu(['theme_location' => 'footer_social', 'menu_class' => 'nav']);
                endif;
                ?>
                </nav>
            </div>
        </div>
    </div>
</div>
</footer>
