 <!-- where to invest -->
 <div class="container div_sections where">
    <div class="row justify-content-center">
      <div class="col-lg-5 where_we_invest">
        <h6 class="my-4">where we invest</h6>
        <p class="py-3">
          We invest in high and fast growth startups in the underserved parts of Africa, mainly South South & South
          Eastern Nigeria. We believe in the entreprise & the growth of Southern Nigeria; that is why till date we have
          invested & supported startups in the following areas in South South & South Eastern Nigeria.
        </p>
          <div class="invest_btn">
            <button class="btn btn_learn_more">Learn more about us <span> <i class="fa fa-arrow-right ms-2"></i>
            </span></button>
          </div>
      </div>

      <div class="col-lg-4 where_we_invest ms-auto industry">
        <h6 class="my-4"><span>indutries We Invest In</span></h6>
        <?php
                if (has_nav_menu('invest')) :
                    wp_nav_menu(array(
                        'theme_location' => 'invest',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="p-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                else :
                    printf(
                        '<a href="%1$s">%2$s</a>',
                        esc_url(admin_url('/nav-menus.php')),
                        esc_html__('Assign menu ', 'rsc')
                    );
                endif;
                ?>
      </div>
    </div>
  </div>