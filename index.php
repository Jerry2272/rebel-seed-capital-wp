<?php
/* *
 * The main template file. */


get_header();
?>

<?php get_template_part( 'assets/template-parts/header/content', 'home-hero' ); ?>
<?php get_template_part( 'assets/template-parts/misc/content', 'dialy-innovation' ); ?>
<?php get_template_part( 'assets/template-parts/misc/content', 'where-to-invest' ) ?>




























<?php get_template_part('asset/') ?>


  <!-- why you should invest with us section -->
  <div class="container-fluid why_us div_sections pt-4">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active btn btn_apply" id="pills-home-tab" data-bs-toggle="pill"
          data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
          <span><i class="fa fa-arrow-left"></i></span> Investors </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link btn btn_learn_more" id="pills-profile-tab" data-bs-toggle="pill"
          data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
          Startups <span><i class="fa fa-arrow-right"></i></span> </button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="row gy-2">
          <div class="col-lg-6 look_to_invest order-last order-lg-first">
            <h5>
              <small> Looking to invest? Here’s
                why you should with us</small>
            </h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis,
            </p>
            <ul class="p-0">
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Location</h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum porta magna at blandit a.
                  </p>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Track record</h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum porta magna at blandit a.
                  </p>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Investment portfolios</h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum porta magna at blandit a.
                  </p>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Data driven investment decisions</h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum porta magna at blandit a.
                  </p>
                </div>
              </li>
            </ul>

            <div class="mb-3">
              <button class="btn btn_apply me-2"> Schedule A call<span><i class="fa fa-arrow-right ms-2"></i></span>
              </button>
            </div>
          </div>
          <div class="col-lg-4 ms-lg-auto investor">
            <img src="<?php echo get_template_directory_uri (); ?>/assets/image/investor.png" alt="">
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="row gy-2">
          <div class="col-lg-6 look_to_invest order-last order-lg-first">
            <h5>
              <small> Looking to invest? Here’s
                why you should with us</small>
            </h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis,
            </p>
            <ul class="p-0">
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Location</h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum porta magna at blandit a.
                  </p>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Track record</h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum porta magna at blandit a.
                  </p>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Investment portfolios</h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum porta magna at blandit a.
                  </p>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Data driven investment decisions</h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum porta magna at blandit a.
                  </p>
                </div>
              </li>
            </ul>

            <div class="mb-3">
              <button class="btn btn_apply me-2"> Pitch Your Startup <span><i class="fa fa-arrow-right"></i></span>
              </button>
            </div>
          </div>
          <div class="col-lg-4 ms-lg-auto investor">
            <img src="<?php echo get_template_directory_uri (); ?>/assets/image/investor.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part( 'assets/template-parts/misc/content', 'featured-team' ); ?>
  <?php get_template_part( 'assets/template-parts/misc/content', 'featured-news-article' ); ?>




  <!-- ready to invest -->
  <div class="container-fluid ready_to div_sections mb-0">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10">
        <div class="ready">
          <h5 class="my-3">Ready to invest or do you have a daring idea?</h5>
          <p class="text-white-50 mb-5">
            We invest in high and fast growth startups in the underserved parts of Africa, mainly South South & South
            Eastern Nigeria. We believe in the entreprise & the
          </p>
          <div class="mb-3 d-flex justify-content-center" style="gap: 5px;">
            <button class="btn btn_apply me-lg-3 fund-btn"> <span><i class="fa fa-arrow-left"></i></span> Apply for
              Funding </button>
            <button class="btn btn_learn_more fund-btn"> Apply to invest <span><i class="fa fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php get_footer(); ?>