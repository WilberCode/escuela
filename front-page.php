 
<?php 
/*
Template Name: Front Page
Template Post Type: post, page, event
*/ 

get_header();?>
<style>
   :root{
      --bg-current:var(--bg-primary);
   }

   
   .banner-wrap{
      animation: banner  2s ease-in-out; 
   }

   @keyframes banner {  
      0% {visibility:collapse} 
      100% { visibility:visible}   
   }
</style> 
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1  class="absolute text-transparent z-[-1] text-center " ><?php the_title(); ?></h1>
     
          <div class="overflow-hidden banner-wrap bg-layout sm:h-[666px]"  >
          <?php  the_content(); ?>
          </div> 
 
  <?php endwhile; endif; ?> 
  
<section  class="bg-white     z-20 menutabs  mb-2"  id="menutabs">
   <div class="container maxsm:px-1 ">
      <ul  class="grid grid-cols-4  gap-1 sm:gap-6 py-6 ">
         <?php 
            if (get_field('home_menutabs')){  
               if( have_rows('home_menutabs') ){ 
                  ?>  
                     <?php while( have_rows('home_menutabs') ){
                           the_row(); ?> 
                              <li> 
                                 <a class="note flex justify-center " style="background-color:<?=get_sub_field('home_menutabs_color');  ?>" href="#<?=get_sub_field('home_menutabs_id');  ?>" >
                                    <div class=" note-icon !left-auto " >
                                       <div  class=" note-icon-bg" >
                                          <svg  class="w-full h-full "  fill="<?=get_sub_field('home_menutabs_color');  ?>"><use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#decorator';?>"></svg>
                                       </div> 
                                       <div class="note-icon-image " >
                                          <svg  class="w-6 h-6 text-dark fill-current  "   ><use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#'.get_sub_field('home_menutabs_id').'';?>"></svg>
                                       </div>
                                    </div>
                                    <div  class="text-center" >  
                                             <h3  class="mt-2"> <?=get_sub_field('home_menutabs_nombre');  ?></h3>  
                                    </div>  
                                 </a>

                              </li> 

                        <?php  
                        }  ?>  
            <?php  }
         
         }  ?> 
         
      </ul>
   </div>
</section>
<main  class="flex-1 bg-layout" id="main">   
 
    <?php if( have_rows('home_programas') ): ?> 

      <?php while( have_rows('home_programas') ): the_row();  ?>
         <?php $home_programas_programa =  get_sub_field('home_programas_programa'); 
                  if($home_programas_programa):
                     $home_programas_programa_nombre = $home_programas_programa['home_programas_programa_nombre'];  
                     $home_programas_programa_cantidad = $home_programas_programa['home_programas_programa_cantidad'];   
                        ?>
         
         <section class="layout" id="<?=$home_programas_programa_nombre; ?>" style="background-color:<?=get_sub_field('home_programas_color');?>" >
            <div class="container">
               <div class="layout-heading">
                       
                     <?php if (get_sub_field('home_programas_titulo')) {  ?> 
                        <h2><?php echo get_sub_field('home_programas_titulo'); ?></h2>
                     <?php } ?>
                     <?php if (get_sub_field('home_programas_descripcion')) {  ?> 
                        <p><?=get_sub_field('home_programas_descripcion'); ?> </p>
                     <?php } ?>
               </div> 
            
                     
                     <?php echo do_shortcode('['.$home_programas_programa_nombre.' programa="'.$home_programas_programa_nombre.'" cantidad="'.$home_programas_programa_cantidad.'"]'); ?>
               <?php endif;?> 
                  </div>
         </section>
            <?php endwhile; ?> 
   <?php endif; ?>
         
 
   </main> 
   <section class="bg-layout layout " id="in-house"  >
      <div class="container"> 
      <?php if( have_rows('home_in_house') ): ?>
         <?php while( have_rows('home_in_house') ): the_row();   
            $home_in_house_imagen = get_sub_field('home_in_house_imagen');
         ?>
  
            <div class="cardfull "   >
               <div  class=" cardfull-right " >  
                  <img class="rounded-card w-full max-w-[798px]" src="<?= esc_url( $home_in_house_imagen['sizes']['inhouse-thumbnail']); ?>" alt="">               
                     
               </div>
               <div class=" cardfull-left "  >
                  <div class=" m-0  editor "> 
                        <?=get_sub_field('home_in_house_descripcion');?>
                        <?php 
                         $home_in_house_boton =   get_sub_field('home_in_house_boton'); 
                         if(!empty($home_in_house_boton['home_in_house_boton_texto'])){ 
                        ?>
                           <a  class="btn bg-secondary mt-4" href="<?=$home_in_house_boton['home_in_house_boton_enlace']; ?>"><?=$home_in_house_boton['home_in_house_boton_texto']; ?></a>
                        <?php }?>
                  </div>
               </div>
                  
            </div>  
         <?php endwhile; ?>
      <?php endif; ?>
        

      </div> 
   </section>
   <section class="bg-white layout clients" id="clientes" >
      <div class="container"> 
       <div class="layout-heading">
            <h2>Clientes</h2>  
            <p  class="text-sm sm:text-h5" >Que ya confiaron en nosotros </p>
      </div>
      <?php 
             if (get_field('home_clientes')){  
                  if( have_rows('home_clientes') ){ 
                     ?>  
                     <ul  class="clients-images flex flex-wrap justify-center items-center space-x-6 sm:space-x-12 space-y-6 ">
                           <?php while( have_rows('home_clientes') ){
                              the_row();   
                              $home_clientes_logo = get_sub_field('home_clientes_logo');
                              ?> 
                                 <li> 
                                   <img src="<?=$home_clientes_logo['url'];  ?>" alt="<?=get_sub_field('home_clientes_nombre');  ?>">  
                                 </li> 
 
                          <?php  
                           }  ?>  
                     </ul>
               <?php  }
            
            }  ?> 
      </div>
   </section>
   <section class="bg-layout layout  "  >
      <div class="container"> 
         <div class="layout-heading">
               <h2>Ubicación</h2>  
               <p>Donde nos encuentras / Contactos </p>
         </div> 

         <div class="cardfull "   >
            <div class=" cardfull-left "  >
               <div>

               <?php  
                      $contactos =  get_field('contactos','option');
                     ?> 
              
                  <?php if(!empty( $contactos )){ ?>  
                     <?php 
                              if($contactos){
                                 foreach( $contactos as $contacto ) {   ?> 
                                   
                                       <h4> <?=$contacto['contactos_titulo'];?></h4>
                                       <?php  
                                       $contactos_info = $contacto['contactos_info'];
                                    
                                       if($contactos_info){ ?>   
                                          <?php  foreach( $contactos_info as $contactos_info_single ) {  
                                             $tag = '';
                                             $tag_close='';
                                             if($contactos_info_single['contactos_info_enlace_activo']){ 
                                                $tag = '<a href="'.$contactos_info_single['contactos_info_enlace'].'">  ';
                                                $tag_close = '</a>';
                                             } else{
                                                $tag = '<div>';
                                                $tag_close  = '</div>';
                                             }?> 
                                             <?=$tag;?>
                                                   <address class="contactinfo-data">
                                                      <div  class="contactinfo-icon-wrap" >  
                                                            <div  class="contactinfo-icon !bg-secondary-500">
                                                               <?php if( $contactos_info_single['contactos_info_icono']){?>
                                                                  <img class="style-svg" src="<?=$contactos_info_single['contactos_info_icono'] ?>"> 
                                                               <?php }else{?>
                                                                  <span class="text-white">➤</span>
                                                               <?php }?>
                                                            </div>  
                                                      </div>
                                                      <div class="contactinfo-content" >  
                                                            <h5 class="contactinfo-content-name"><?=$contactos_info_single['contactos_info_nombre'] ?></h5> 
                                                            <p class="contactinfo-content-description"><?=$contactos_info_single['contactos_info_descripcion'] ?></p> 
                                                      </div> 
                                                   </address>   
                                           <?=$tag_close;?>
                                             <?php    
                                          }  ?>    
                                       <?php }?>   
                                    <?php    
                                 }    
                              }
                              ?>   
                  <?php }?>  
               </div>

         
            </div>  
            <div  class="cardfull-right  " >  
                  <iframe  class="rounded-card h-[200px] md:h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31215.258138954992!2d-77.06506115899901!3d-12.049901133777647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9f33e6334c3%3A0x8703fdb409aa8654!2sInstituto%20de%20Gerencia%20Intercontinental!5e0!3m2!1ses-419!2spe!4v1662840778597!5m2!1ses-419!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               
                  
            </div>
         </div>    

      </div>
   </section>

 
<?php
get_footer();?>  
