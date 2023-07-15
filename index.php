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
              <small> What we offer Investors </small>
            </h5>
            <p>
            Here’s a few of what we offer smart family offices and Institutional Investors looking to diversify their portfolio while 
            </p>
            <ul class="p-0">
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Insight </h6>
                  <p>
                  We provide unparalleled insight into Africa’s secondary cities’ ecosystem
                  </p>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Native Intelligence </h6>
                  <p>
                  We are integrated in the fabrics of the ecosystem 
                  </p>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold"> Impact </h6>
                  <p>
                  Your money can do more work to uplift humanity 
                  </p>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/image/feature_icon.png" alt="" class="me-4">
                <div>
                  <h6 class="fw-bold">Returns </h6>
                  <p>
                  We are confident of our ability to maximise return on investment
                  </p>
                </div>
              </li>
            </ul>

            <div class="mb-3 mt-3">
              <button class="btn btn_apply me-2"> Schedule a Call<span><i class="fa fa-arrow-right ms-2"></i></span>
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
          <h5 class="my-3">Are you a Rebel?</h5>
          <p class="text-white-50 mb-5">
          From our lens, you’re either a Rebel, a Rebel Backer or conformist. If you’re either of the first two, we want to speak with you
          </p>
          <div class="mb-3 d-flex justify-content-center" style="gap: 5px;">
            <button class="btn btn_apply me-lg-3 fund-btn"> <span><i class="fa fa-arrow-left"></i></span> Rebels Apply Here </button>
            <button class="btn btn_learn_more fund-btn">  Backers Connect Here <span><i class="fa fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php get_footer(); ?>