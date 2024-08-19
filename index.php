<?php 
   get_header(); 
?>

      <div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
      <h2 class="section-title py-5"><?php echo esc_html__('EVENTS AT THE FOOD HUT','foodhut'); ?></h2>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                <?php if ( have_posts() ) :  ?>
                              <?php while ( have_posts() ) :  the_post(); ?>
                                       <?php echo get_template_part('template-parts/content',get_post_format()); ?>
                            <?php endwhile; ?>
                            <?php else: ?>
                              <?php echo get_template_part('template-parts/content-none') ?>
                     <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
         <!-- postbox area end -->
<?php get_footer(); ?>