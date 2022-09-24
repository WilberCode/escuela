<?php
 
// Widgets
 
function wph_widgets_registration(){ 
/*     register_sidebar(array(
        'name' => __('Header - Slogan'),
        'id' =>'header-slogan',
        'description'   => 'Slogan',
        'before_widget' => '<div class="header-slogan">',
		'after_widget'  => '</div>', 
		'before_title' => '<h2 class="hidden">',
        'after_title'  => '</h2>'
    ));    */ 
    register_sidebar(array(
        'name' => __('Curso - Formulario'),
        'id' =>'curso-form',
        'description'   => 'Formulario de contacto',
        'before_widget' => '<div class="single-form">',
		  'after_widget'  => '</div>', 
    ));    
    register_sidebar(array(
        'name' => __('Diploma - Formulario'),
        'id' =>'diploma-form',
        'description'   => 'Formulario de contacto',
        'before_widget' => '<div class="single-form">',
		  'after_widget'  => '</div>', 
    ));    
    register_sidebar(array(
        'name' => __('Congreso - Formulario'),
        'id' =>'congreso-form',
        'description'   => 'Formulario de contacto',
        'before_widget' => '<div class="single-form">',
		  'after_widget'  => '</div>', 
    ));  
    register_sidebar(array(
        'name' => __('Catálogo - Formulario'),
        'id' =>'catalogo-form',
        'description'   => 'Formulario de Catálogo',
        'before_widget' => '<div class="single-form">',
		  'after_widget'  => '</div>', 
    ));  
    register_sidebar(array(
        'name' => __('Blog - Sidebar'),
        'id' =>'blog-sidebar',
        'description'   => 'Contenido de barra lateral',
        'before_widget' => '<div class="blog-sidebar">',
		  'after_widget'  => '</div>', 
    ));  

    register_sidebar(array(
        'name' => __('Footer - Formulario de Suscripción'),
        'id' =>'footer-subscribe',
        'description'   => 'Suscripción',
        'before_widget' => '<div class="footer-subscribe">',
		'after_widget'  => '</div>', 
        'before_title' => '<h2 class="hidden">',
        'after_title'  => '</h2>'
    ));  


	register_sidebar(array(
        'name' => __('Footer - Redes Sociales'),
        'id' =>'footer-social-media',
        'description'   => 'Información de Redes Sociales',
        'before_widget' => '<div class="footer-social-media">',
         'after_widget'  => '</div>', 
         'before_title' => '<h2 class="hidden">',
        'after_title'  => '</h2>'
    ));  
	register_sidebar(array(
        'name' => __('Footer - Copyright'),
        'id' =>'footer-copyright',
        'description'   => 'Información de Copyright',
        'before_widget' => '<div class="footer-copyright">',
		'after_widget'  => '</div>', 
		'before_title' => '<h2 class="hidden">',
        'after_title'  => '</h2>'
    ));  
  
}
add_action('widgets_init', 'wph_widgets_registration');
 