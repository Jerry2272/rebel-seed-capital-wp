<?php
/* *
 * The main template file. */


get_header();
?>

<?php get_template_part( 'assets/template-parts/header/content', 'home-hero' ); ?>
<?php get_template_part( 'assets/template-parts/misc/content', 'dialy-innovation' ); ?>
<?php get_template_part( 'assets/template-parts/misc/content', 'where-to-invest' ) ?>
<?php get_template_part('assets/template-parts/misc/content', 'what-we-believe') ?>
  <!-- why you should invest with us section -->
  <div class="container-fluid why_us div_sections pt-4">
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="row gy-2">
          <div class="col-lg-6 look_to_invest order-last order-lg-first">
            <h5>
              <small>Looking to invest? Here’s why you should Invest with us</small>
            </h5>
            <p>
            We back exceptional founders building outside the major tech hubs in Africa.
            </p>
            <ul class="p-0">
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Untapped Potential</h6>
                  <p>
                  By focusing on underserved areas, we unlock opportunities for high-growth startups with innovative ideas and untapped markets.
                  </p>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Diverse Portfolio Opportunities</h6>
                  <p>
                  Our unique focus on regions outside major investment hubs ensures a portfolio rich in diversity, offering resilience and the potential for outsized returns.

                  </p>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Impactful Investments</h6>
                  <p>
                  Our investments drive positive change, empowering entrepreneurs and transforming communities.
                  </p>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Experienced Partnership</h6>
                  <p>
                  With a proven track record of identifying and nurturing promising startups in secondary cities, we provide unique insights on the best investments.
                  </p>
                </div>
              </li>
            </ul>

            <div class="mb-3 mt-3">
              <button class="btn btn_apply me-2"> Learn  More<span><i class="fa fa-arrow-right ms-2"></i></span>
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
              <small> What we offer Startup Founders</small>
            </h5>
            <p>
            Aside funding, here are a few great incentives we offer 
            </p>
            <ul class="p-0">
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Network</h6>
                  <p>
                  explore our vast sectoral diversified network spanning multiple jurisdictions
                  </p>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Community</h6>
                  <p>
                  we take pride in the ecosystems we have built over the years and welcome you to join us
                  </p>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Regulatory Support</h6>
                  <p>
                  we will support you through the process of the approvals you need
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
          <h5 class="my-3">Ready to invest or you have got a daring idea?</h5>
          <p class="text-white-50 mb-5">
          We back exceptional founders building high-growth technology startups in underserved African cities starting with the South-South & South-Eastern Region of Nigeria.
          </p>
          <div class="mb-3 d-flex justify-content-center" style="gap: 5px;">
            <button class="btn btn_apply me-lg-3 fund-btn"> <span><i class="fa fa-arrow-left"></i></span>Apply for funding</button>
            <button class="btn btn_learn_more fund-btn" 
            >Invest with us<span><i class="fa fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php get_footer(); ?>