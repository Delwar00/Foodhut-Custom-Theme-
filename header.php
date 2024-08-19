<!doctype html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
      <?php endif;?>
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      

      <?php wp_head(); ?> 


   </head>
   <body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
   
  <!-- header area start -->
  <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
            <?php header_left_side_menu(); ?>
           
            <?php foodhat_logo(); ?>

            <?php header_right_side_menu(); ?>
           
        </div>
    </nav>
   