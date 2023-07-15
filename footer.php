<?php
/**
 * Contains footer
 */
?>



<!-- footer-section -->
 <footer class="container-fluid text-white pt-5">
    <div class="container justify-content-center text-center">
      <div class="row justify-content-center text-center gx-lg-5">
        <div class="col-lg-5">
          <h6 class="pt-3"><small>Subcribe to our newsletter to stay updated</small></h6>
        </div>
        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Enter your email address">
            <button class="btn btn_apply" type="button">Subcribe <span><i class="fa fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
        <div class="col-lg-12 mx-auto mt-5">
        <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

            if (has_custom_logo()) {
                printf(
                    '<a href="%1$s" class="navbar-brand"><img src="%2$s"/></a>',
                    esc_url(home_url()),
                    esc_url($logo[0])
                );
            } else {
                echo bloginfo('name');
            }
            ?>

          <?php
                if (has_nav_menu('contact')) :
                    wp_nav_menu(array(
                        'theme_location' => 'contact',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="my-4 mx-auto %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                else :
                    printf(
                        '<a href="%1$s">%2$s</a>',
                        esc_url(admin_url('/nav-menus.php')),
                        esc_html__('Assign a menu', 'rsc')
                    );
                endif;
                ?>
        </div>
      </div>
    </div>
    <hr>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <p>© 2022 Rebel Seed Capital. All rights reserved</p>
        </div>
        <div class="col-lg-6">
          <?php
                if (has_nav_menu('socials')) :
                    wp_nav_menu(array(
                        'theme_location' => 'socials',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="icon text-lg-end %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                else :
                    printf(
                        '<a href="%1$s">%2$s</a>',
                        esc_url(admin_url('/nav-menus.php')),
                        esc_html__('Assign a menu', 'rsc')
                    );
                endif;
                ?>
        </div>
      </div>
</div>
  </footer>



  <?php wp_footer(); ?>
</body>

</html>