<!-- page footer  -->
   <?php 
        $footer_contact_email = get_theme_mod( 'footer_contact_email', __('info@website.com','foodhat') );
        $footer_contact_phone = get_theme_mod( 'footer_contact_phone', __('(123) 456-7890','foodhat') );
        $footer_contact_location = get_theme_mod( 'footer_contact_location', __('12345 Fake ST NoWhere AB Country','foodhat') );
    ?>
<div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
                <h3><?php echo esc_html__('EMAIL US','foodhat'); ?></h3>
                <?php if(!empty($footer_contact_email)) : ?>
                    <P class="text-muted"><?php echo esc_html($footer_contact_email); ?></P>
                <?php endif; ?>
            </div>
            <div class="col-sm-4">
                <h3><?php echo esc_html__('CALL US','foodhat'); ?></h3>
                <?php if(!empty($footer_contact_phone)) : ?>
                     <P class="text-muted"><?php echo esc_html($footer_contact_phone); ?></P>
                <?php endif; ?>
            </div>
            <div class="col-sm-4">
                <h3><?php echo esc_html__('FIND US','foodhat'); ?></h3>
                <?php if(!empty($footer_contact_location)) : ?>
                    <P class="text-muted"><?php echo esc_html($footer_contact_location); ?></P>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
 
    <?php 
        $footer_copyright_content = get_theme_mod( 'footer_copyright_text', __('© Copyright 2024 Made with  By DevCRUD.','foodhat') );
        ?>
        <?php if(!empty($footer_copyright_content)) : ?>
            <p class="mb-0 py-3 text-muted small">
                    <?php echo wp_kses_post($footer_copyright_content); ?>
            </p>
            <?php endif; ?>
        <?php
        
    ?>
        
    </div>
    <!-- end of page footer -->
      <?php wp_footer(); ?> 
   </body>
</html>