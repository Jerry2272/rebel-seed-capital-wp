<?php


/**
 * 
 * Name: featured team
 *
 */

//get posts

?>


    <!-- team section -->
    <div class="container-fluid justify-content-center team div_sections">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <h2 class="text-center"> Meet our team </h2>
          <p class="text-center">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus
            sit amet luctus venenatis, lectus magna fringilla urna
          </p>
        </div>
        <div class="ow-button text-lg-end">
          <button>
            <a href="#" class="text"> <span class="fa fa-arrow-left"></span> </a>
          </button>
          <button>
            <a href="#"> <span class="fa fa-arrow-right"></span> </a>
          </button>
        </div>
      </div>
      <div class="row">
        <div class="owl-carousel owl-theme">

        <?php
            $args = array(
            'post_type'      => 'post',
            'category_name'  => 'featured-team',
            'posts_per_page' => 3,
            );
            $query = new WP_Query( $args );

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>

          <div class="item">
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="...">
             <?php endif; ?>
            <div class="item">
              <span> <small> <?php the_excerpt(); ?> </small> </span>
              <h6> <?php the_title(); ?> </h6>
            </div>
          </div>


          <?php
                endwhile;
                wp_reset_postdata();
              else :
                echo '<p>No posts found.</p>';
              endif;
              ?>
        </div>
      </div>
    </div>