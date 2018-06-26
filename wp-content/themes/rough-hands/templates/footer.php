<footer class="mt-5">
    <div class="jumbotron mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2 text-center">
                    <img src="/wp-content/themes/rough-hands/dist/images/location_img_invert.png" alt="Barbershop location image" />
                </div>
                <div class="col-12 col-sm-3 col-md-3">
                    <div id="footer-contact-box">
                        <p><em>Contact:</em></p>
                        <?php
                        if (is_active_sidebar('contact-information')) :
                            dynamic_sidebar('contact-information');
                        endif;
                        ?>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-md-2">
                    <p><em>Page:</em></p>
                    <nav>
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex-column']);
                    endif;
                    ?>
                    </nav>
                </div>
                <div class="col-6 col-sm-3 col-md-2">
                    <p><em>Various:</em></p>
                    <nav>
                    <?php
                    if (has_nav_menu('footer_secondary')) :
                        wp_nav_menu(['theme_location' => 'footer_secondary', 'menu_class' => 'nav flex-column']);
                    endif;
                    ?>
                    </nav>
                </div>
                <div class="col-6 col-sm-3 col-md-2">
                    <p><em>Social:</em></p>
                    <nav>
                    <?php
                    if (has_nav_menu('footer_social')) :
                        wp_nav_menu(['theme_location' => 'footer_social', 'menu_class' => 'nav flex-column']);
                    endif;
                    ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FULLSCREEN MODAL CODE (.fullscreen) -->
<div class="modal fade fullscreen" id="menuModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="color:#fff;">
            <div class="modal-header" style="border:0;">
                    <h4 class="modal-title text-center"><img src="/wp-content/themes/rough-hands/dist/images/location_img_invert.png" alt="Rough Hands mobile logo" /><span class="sr-only">main navigation</span></h4>
                    <button type="button" class="close btn btn-link" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close fa-lg" style="color:#fff;"></i></button>	
            </div>
            <div class="modal-body text-center">
            <?php wp_nav_menu(['theme_location' => 'primary_navigation']) ?>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.fullscreen -->
