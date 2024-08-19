<?php 
   get_header(); 
?>
 <!-- postbox details area start -->
 <section class="pp-sing tp-standard-post-format postbox__area grey-bg-4 pt-120 pb-120" >
            <div class="container">
                  <div class="col-xxl-12">
                     <div class="postbox__wrappers">
                        <div class="postbox__mains">
                           <div class="row">
                              <div class="col-xxl-12 col-lg-12" style="width:100%">
                                 <div class="postbox__main-wrapper">
                                 <?php if ( have_posts() ) : ?>
                                 <?php while ( have_posts() ) : the_post(); ?> 
                                 <?php echo get_template_part( 'template-parts/content' , get_post_format() ); 
                                    $prev_post = get_previous_post();
                                    $next_post = get_next_post();
                              
                                 ?>

                                  <?php if(!empty($prev_post) && !empty($next_post))  : ?>
                                     <div class="postbox__more-navigation white-bg d-none d-md-flex justify-content-between flex-wrap mb-40">
                                       <div class="postbox__more-left d-flex align-items-center">
                                          <div class="postbox__more-icon">
                                             <a href="<?php echo get_the_permalink( $prev_post ); ?>">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M7 12.9718L2.06061 8.04401C1.47727 7.46205 1.47727 6.50975 2.06061 5.92778L7 1" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </a>
                                          </div>
                                          <div class="postbox__more-content">
                                             <p><?php echo esc_html__('Previous Article','foodhut'); ?></p>
                                             <h4>
                                                <a href="<?php echo get_the_permalink( $prev_post ); ?>"><?php echo get_the_title( $prev_post ); ?></a>
                                             </h4>
                                          </div>
                                       </div>
                                       <div class="postbox__more-right d-flex align-items-center">
                                          <div class="postbox__more-content">
                                             <p><?php echo esc_html__('Next Article','foodhut'); ?></p>
                                             <h4>
                                                <a href="<?php echo get_the_permalink( $next_post ); ?>"><?php echo get_the_title( $next_post ); ?></a>
                                             </h4>
                                          </div>
                                          <div class="postbox__more-icon">
                                             <a href="<?php echo get_the_permalink( $next_post ); ?>">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M1 12.9718L5.93939 8.04401C6.52273 7.46205 6.52273 6.50975 5.93939 5.92778L1 1" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                                      
                                             </a>
                                          </div>
                                       </div>
                                    </div> 
                                    <?php echo get_template_part('template-parts/biography'); ?>
                                    
                                    <?php endif; ?>

                                    <?php endwhile; ?>
                                    <?php else: ?>
                                    <?php echo get_template_part('template-parts/content-none') ?>
                                    <?php endif; ?>

                                    <div class="postbox__related mb-65">
                                       <h3 class="postbox__related-title"><?php echo esc_html__('You may also like','foodhut'); ?></h3>

                                       <div class="row">
                                       <?php
                                    // Get the current post ID
                                    $current_post_id = get_the_ID();

                                    // Get the categories of the current post
                                    $categories = get_the_category($current_post_id);


                                    // If the post has categories, get related posts based on the first category
                                    if ($categories) :
                                       // $category_id = $categories[0]->term_id;

                                       $related_cat = [];
                                       foreach ($categories as $category) {
                                          $related_cat[] = $category->term_id;
                                       }

                                       // Define custom query parameters
                                       $args = array(
                                             'post_type' => 'post', // Adjust post type if needed
                                             'posts_per_page' => 2, // Number of related posts to display
                                             'post__not_in' => array($current_post_id), // Exclude the current post
                                             'category__in' => $related_cat, // Include posts from the current post's category
                                             'orderby' => 'rand', // Order by random; you can adjust this based on your preference
                                       );



                                       $related_posts_query = new WP_Query($args);

                                       if ($related_posts_query->have_posts()) :
                                             while ($related_posts_query->have_posts()) :
                                                $related_posts_query->the_post();

                                                $author_id = get_the_author_meta('ID');
                                                // Get the author's avatar
                                                $author_avatar =  25;
                                                $categories = get_the_category();
                                               
                                    ?>
                                          <div class="col-md-4 my-3 my-md-0">
                                                <div class='related-ppo'>
                                                   <a href="<?php the_permalink() ?>"class="card bg-transparent border">
                                                         <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo the_post_thumbnail_caption(); ?>" class="rounded-0 card-img-top mg-responsive">
                                                         <div class="card-body">
                                                               <h1 class="text-center mb-4"><a href="<?php the_permalink() ?>" class="badge badge-primary"><?php echo get_field('price').'$'; ?></a></h1>
                                                               <h4 class="pt20 pb20"><?php the_title(); ?></h4>
                                                               <p class="text-white"><?php the_excerpt(); ?> </p>
                                                         </div>
                                                   </a>
                                                </div>
                                          </div>
                                          
                                          <?php endwhile; ?>
                                          <?php endif; ?>
                                          <?php endif; ?>   
                                       </div>
                                    </div>
                                    <?php if ( have_posts() ) : ?>
                                             <?php while ( have_posts() ) : the_post(); ?>    
                  
                                             <?php if ( comments_open() || get_comments_number() ) :
                                                comments_template();
                                             endif; ?>
                                             <?php endwhile; ?>
                                          <?php endif; ?>
                                   
                                 </div>
                              </div>
                             
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
         </section>
         <!-- postbox details area end -->

         <?php get_footer(); ?>