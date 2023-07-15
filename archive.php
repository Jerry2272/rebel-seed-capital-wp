<?php
/**
 * The template for displaying archive pages.
 */
get_header();
?>  

      <?php get_template_part( 'assets/template-parts/header/content', 'archive-hero' ); ?>
<?php  if ( have_posts() ) :  ?>



        <div class="container div_sections recent_news" id="scrolldown">

                <h5 class="mb-5"><?php  single_cat_title(); ?></h5>
                  
                <div class="row justify-content-center gy-5">
                            <?php
                                // Start the loop.
                                while ( have_posts() ) :
                                    the_post();
                                    
                                    get_template_part( 'assets/template-parts/posts/content', 'archive' );
                                endwhile;

                                echo paginate_links( [
                                    'prev_text' => esc_html__( 'Prev', 'rsc' ),
                                    'next_text' => esc_html__( 'Next', 'rsc' ),
                                ] );

                        else :
                            get_template_part( 'assets/template-parts/page/content', 'none' );
                        ?>
                    
       
                    <?php endif; ?>
        </div>
    </div>

<?php get_footer(); 
?>