<?php

//header top information
function header_top_info(){
      new \Kirki\Panel(
            'header_info',
            [
                  'priority'    => 10,
                  'title'       => esc_html__( 'Theme Options', 'foodhat' ),
                  'description' => esc_html__( 'Here you can add your header info.', 'foodhat' ),
            ]
      );
      
      new \Kirki\Section(
            'header_section_info',
            [
                  'title'       => esc_html__( 'Header Logo', 'foodhat' ),
                  'description' => esc_html__( 'Header Logo Info here.', 'foodhat' ),
                  'panel'       => 'header_info',
                  'priority'    => 160,
            ]
      );
      
      new \Kirki\Field\Image(
            [
                  'settings'    => 'header_logo',
                  'label'       => esc_html__( 'Logo', 'harry' ),
                  'description' => esc_html__( 'Update your logo.', 'harry' ),
                  'section'     => 'header_section_info',
                  'default'     => get_template_directory_uri().'/assets/imgs/logo.png'
            ]
      );
      new \Kirki\Field\Text(
            [
                  'settings' => 'header_logo_slogan',
                  'label'    => esc_html__( 'Slogan', 'foodhat' ),
                  'section'  => 'header_section_info',
                  'default'  => esc_html__( '', 'FoodHut' ),
                  'priority' => 10,
            ]
      );   
      
}
header_top_info();

//Footer contact information
function footer_contact_info(){
    
      
      new \Kirki\Section(
            'footer_contact_section',
            [
                  'title'       => esc_html__( 'Footer Contact', 'foodhat' ),
                  'description' => esc_html__( 'Footer Contact Info here.', 'foodhat' ),
                  'panel'       => 'header_info',
                  'priority'    => 160,
            ]
      );
      new \Kirki\Field\Text(
            [
                  'settings' => 'footer_contact_email',
                  'label'    => esc_html__( 'Footer Email', 'foodhat' ),
                  'section'  => 'footer_contact_section',
                  'default'  => esc_html__( 'info@website.com', 'foodhat' ),
                  'priority' => 10,
            ]
      );   
      new \Kirki\Field\Text(
            [
                  'settings' => 'footer_contact_phone',
                  'label'    => esc_html__( 'Footer Phone', 'foodhat' ),
                  'section'  => 'footer_contact_section',
                  'default'  => esc_html__( '(123) 456-7890', 'foodhat' ),
                  'priority' => 10,
            ]
      ); 
      new \Kirki\Field\Textarea(
            [
                  'settings' => 'footer_contact_location',
                  'label'    => esc_html__( 'Footer Location', 'foodhat' ),
                  'section'  => 'footer_contact_section',
                  'default'  => esc_html__( '12345 Fake ST NoWhere AB Country', 'foodhat' ),
                  'priority' => 10,
            ]
      ); 
}
footer_contact_info();



//Footer copyright
function footer_copyright(){
    
      
      new \Kirki\Section(
            'footer_copyright_section',
            [
                  'title'       => esc_html__( 'Footer Copyright', 'foodhat' ),
                  'description' => esc_html__( 'Footer Copyright Info here.', 'foodhat' ),
                  'panel'       => 'header_info',
                  'priority'    => 160,
            ]
      );
      new \Kirki\Field\Textarea(
            [
                  'settings' => 'footer_copyright_text',
                  'label'    => esc_html__( 'Footer Copyright Text', 'foodhat' ),
                  'section'  => 'footer_copyright_section',
                  'default'  => esc_html__( '© 2022 foodhat All Rights Reserved.', 'foodhat' ),
                  'priority' => 10,
            ]
      );   
}
footer_copyright();
