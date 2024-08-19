<?php

function foodhat_logo(){
    $header_logo = get_theme_mod( 'header_logo', get_template_directory_uri().'/assets/imgs/logo.png' );
    $header_logo_slogan = get_theme_mod( 'header_logo_slogan', __('FoodHut','foodhat'));
    ?>
          <a class="navbar-brand m-auto" href="<?php echo home_url(); ?>">
          <img src="<?php echo esc_html($header_logo); ?>" class="brand-img" alt="<?php echo bloginfo(); ?>">
              <span class="brand-txt"><?php echo esc_html($header_logo_slogan); ?></span>
          </a>
    <?php
}



//foodhat header_left_side_menu
function header_left_side_menu(){
     wp_nav_menu( array(
	'theme_location'  => 'header_left_side_menu',
      'menu_class'      => 'navbar-nav',
      'menu_id'         => '',
      'fallback_cb'     => 'foodhat_Walker_Nav_Menu::fallback',
      'walker'     => new foodhat_Walker_Nav_Menu,
) ); 
}
//foodhat off header_right_side_menu  
function header_right_side_menu(){
      wp_nav_menu( array(
       'theme_location'  => 'header_right_side_menu',
       'menu_class'      => 'navbar-nav',
       'menu_id'         => '',
       'fallback_cb'     => 'foodhat_Walker_Nav_Menu::fallback',
       'walker'     => new foodhat_Walker_Nav_Menu,
 ) ); 
 }


// foodhat single post dynamic
function foodhat_tags(){
	$post_tags = get_the_tags();
    if ($post_tags) {
        foreach ($post_tags as $tag) {
            ?>
            <a href="<?php echo get_tag_link($tag); ?>"><?php echo $tag->name; ?></a>
            <?php
        }
    } else {
        ?>
        <i>No tags found</i>
        <?php
    }
}



// foodhat post social share 
function foodhat_social_share(){ ?>
          <a href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>" target="_blank">
              <i class="ti-linkedin"></i>
          </a>
          <a href="https://instagram.com/intent/instagram?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
              <i class="ti-instagram"></i>
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
              <i class="ti-facebook"></i>
          </a>
  <?php
  }
 // foodhat pagination
 function foodhat_pagination(){
      $pages = paginate_links( array( 
          'type' => 'array',
          'prev_text'    => __('<svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.17749 10.105L1.62499 5.55248L6.17749 0.999981" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M14.3767 5.55249L1.75421 5.55249" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
       </svg>                                       
       Prev'),
          'next_text'    => __('Next
          <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M9.82422 1L14.3767 5.5525L9.82422 10.105" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
             <path d="M1.625 5.55249H14.2475" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          </svg> '),
      ) );
          if( $pages ) {
          echo '<nav><ul>';
          foreach ( $pages as $page ) {
              echo "<li>$page</li>";
          }
          echo '</ul></nav>';
      }
  }



// track_post_views
function track_post_views() {
      if (is_single()) {
          global $post;
          $post_id = $post->ID;
  
          $views = get_post_meta($post_id, 'post_views', true);
          $views = $views ? $views : 0;
  
          $views++;
          update_post_meta($post_id, 'post_views', $views);
      }
  }
  
  add_action('wp_head', 'track_post_views');
  
  // display_post_views 
  function display_post_views() {
      if (is_single()) {
          $post_views = get_post_meta(get_the_ID(), 'post_views', true);
          echo ($post_views ? $post_views : 0);
      }
  }
  // Add filter to customize search form
function foodhat_search_form( $search_form ) {
      $search_form = '<div class="sidebar__search">
                  <form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
                      <div class="sidebar__search-input">
                          <input type="search" class="search-field" placeholder="' . esc_attr_x( 'Enter your keywords...', 'foodhat' ) . '" value="' . get_search_query() . '" name="s" />
                          <button type="submit" class="search-submit">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                          </button>
                      </div>
                  </form>
              </div>';
  
      return $search_form;
  }
  add_filter( 'get_search_form', 'foodhat_search_form' );