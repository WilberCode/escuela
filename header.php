
<?php get_template_part( 'templates/partials/document-open' ); ?>

<!-- Site header markup goes here -->
<header class="shadow bg-white header">
    <div class="header-wrap container m-auto flex h-12 justify-between ">
        <div class="header-logo md:w-1/4 xl:w-1/3 "> 
                 <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
                     <?php if ( has_custom_logo() ) { ?> 
                    <a class="logo__url" href="<?php echo home_url();?>" rel="home">
                        <img id="logo__img" class="logo__img" src="<?php echo esc_url( $logo[0]);?>" alt="<?php bloginfo('name'); ?>" >
                    </a> 
                     <?php }else{?>
                    <a class="logo__title" href="<?php echo home_url();?>" rel="home">
                        <?php echo  '<h1 class="logo__title">'.get_bloginfo( "name" ).'</h1>'; ?>
                    </a>     
                     <?php }?>    
        </div>
        <div class="md:w-3/4  xl:w-2/3 flex  justify-end items-center " >
             <?php  
                wp_nav_menu(array(
                    'theme_location'  => 'main',
                    'container'       => 'nav',
                    'container_class' => 'header-nav',
                    'container_id'    => 'header-nav',  
                    'menu' => 'ul',
                    'menu_class'      => 'header-menu',
                    'menu_id'         => 'header-menu',
                ));  
            ?> 
            <div class="mobile-nav-wrap" id="mobile-nav-wrap"  >
                <div class="header-search flex items-center " id="header-search" > 
                    <?php get_search_form(true); ?>  
                </div>  
                <?php  
                wp_nav_menu(array(
                    'theme_location'  => 'mobile',
                    'container'       => 'nav',
                    'container_class' => 'mobile-nav',
                    'container_id'    => 'mobile-nav',  
                    'menu' => 'ul',
                    'menu_class'      => 'mobile-menu',
                    'menu_id'         => 'mobile-menu' ,
                ));  
            ?> 
            </div>
             <div class="nav-toggle-wrap block lg:hidden ">
                <button  id="nav-toggle" class="nav-toggle focus:outline-none border-none">  
                    <span ></span> 
                    <span ></span> 
                    <span ></span> 
                    <span ></span> 
                    <span ></span> 
                    <span ></span>  
                </button>
             </div>   
        </div>
    </div>
</header>