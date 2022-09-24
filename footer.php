<!-- Site footer markup goes here -->
 
</div>
 
<footer  class="footer" >
    <div class="container">
        <?php dynamic_sidebar('footer-subscribe'); ?>
        <div class="flex flex-col lg:flex-row gap-12 md:gap-3 mt-[5rem] ">
            <div class=" text-center lg:text-left" >
            <?php 
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
                  <?php if ( has_custom_logo() ) { ?>
                  <a href="<?php echo home_url();?>" rel="home">
                     <img class="max-w-[300px] inline-block p-3 rounded-10 bg-white" src="<?php echo esc_url( $logo[0]);?>"
                        alt="<?php bloginfo('name'); ?>">
                  </a>
                  <?php }else{?>
                  <a href="<?php echo home_url();?>" rel="home">
                     <?php echo  '<h1 class="text-primary-500 text-lg">'.get_bloginfo( "name" ).'</h1>'; ?>
                  </a>
            <?php }?>    
                  <?php dynamic_sidebar('footer-social-media'); ?> 
            </div>
            <div class="flex-grow">
                  <?php  
                  wp_nav_menu(array(
                     'theme_location'  => 'footer',
                     'container'       => 'nav',
                     'container_class' => 'footer-nav',   
                     'container_id'    => 'footer-nav',  
                     'menu' => 'ul',
                     'menu_class'      => 'footer-menu',
                     'menu_id'         => 'footer-menu',
                  ));  
            ?> 
            </div> 
        </div>
      <!--    <div  class="flex flex-col items-center mt-10" >
            <?php// dynamic_sidebar('footer-social-copyright'); ?>
         </div> -->
         <div  class="flex flex-col items-center mt-10 border-t border-white border-opacity-5 py-3 " >
            <?php dynamic_sidebar('footer-copyright'); ?> 
         </div>
    </div>

</footer> 
  
<?php get_template_part( 'templates/partials/document-close' ); ?>

