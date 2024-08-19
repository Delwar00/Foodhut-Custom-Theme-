<?php if(is_single()) : ?>
      <article id="<?php the_ID(); ?>" <?php post_class("foodhat-post-standard"); ?> >  
            <div class="pp-image1 postbox__thumb w-img mb-30">
                  <?php the_post_thumbnail(); ?>
            </div>

            <!-- post meta -->
             <?php echo get_template_part('template-parts/blog/meta'); ?>
              <div class="postbox__details-content-wrapper mb-60">
                  <h3 class="postbox__details-title"><?php the_title(); ?></h3>
                  <?php the_content(); ?>
            </div>
            <div class="postbox__share-wrapper mb-60">
            <div class="row align-items-center">
                   <div class="col-xl-7">
                         <div class="tagcloud tagcloud-sm">
                              <span><?php echo esc_html__('Tags:','foodhat'); ?></span>
                               <?php foodhat_tags() ?>
                         </div>
                         </div>
                        <div class="col-xl-5">
                                     <div class="postbox__share text-xl-end">
                                          <span><?php echo esc_html__('Share On:','foodhat'); ?></span>
                                          <?php foodhat_social_share(); ?>
                                    </div>
                               </div>
                        </div>
            </div>                           
                                      
      </article>
<?php else : ?>
      <div class="col-md-4 my-3 my-md-0">
             <a href="<?php the_permalink() ?>"class="card bg-transparent border">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo the_post_thumbnail_caption(); ?>" class="rounded-0 card-img-top mg-responsive">
                  <div class="card-body">
                        <h1 class="text-center mb-4"><a href="<?php the_permalink() ?>" class="badge badge-primary"><?php echo get_field('price').'$'; ?></a></h1>
                        <h4 class="pt20 pb20"><?php the_title(); ?></h4>
                        <p class="text-white"><?php the_excerpt(); ?> </p>
                  </div>
             </a>
       </div>
 
<?php endif; ?>