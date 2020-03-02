
<section class=" bg-gray-400 py-48">

</section>

<div class="h-8"></div>
 

 <script>
     var numberr  =  document.body.offsetWidth
     console.log(numberr)
    
     <?php echo 'hola'.numberr; ?>
 </script>

 <?php 
 $number = 400;
    if( 400 == $number ){
        echo "hola soy width";
    } else{
        echo "hola no soy width";

    } 
 ?>



<div class=" m-auto px-2 md:px-4">
    <div class="tab-wrap">
      <ul class="tab-menu tabs">
        <li class="tab-item tab tab-courses"><a class="tab__link active" href="#courses">
                <picture> <img class="tab__img-couser" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://igc.edu.pe/wp-content/themes/igc/assets/img/cursos-tab-bg.png"   alt="cursos"> 
                      <svg  ><use href="<?php echo get_bloginfo('template_directory').'/assets/svg/forms.svg#courses';?>"></svg>  
                     <span>Cursos</span> 
                    </picture>
                <h1>Cursos - Modalidad Presencial</h1>
            </a>
        </li> 
        <li class="tab-item tab tab-congress">
            <a class="tab__link" href="#congresses">
                <picture> <img class="tab__img-congress"  src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://igc.edu.pe/wp-content/themes/igc/assets/img/congresos-tab-bg.png"   alt="congresos">  
                    <svg class="svg__hours"><use href="<?php echo get_bloginfo('template_directory').'/assets/svg/forms.svg#congresses'; ?>"></svg> 
                <span>Congresos</span> 
                </picture>
                <h1>Congresos Nacionales e Internacionales</h1>
            </a>
        </li>
        <li class="tab-item tab tab-diplomas ">
            <a class="tab__link" href="#diplomas">
            <picture> 
                <img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://igc.edu.pe/wp-content/themes/igc/assets/img/diplomas-tab-bg.png"  alt="diplomas">
               
                <svg class="svg__hours"><use href="<?php echo get_bloginfo('template_directory').'/assets/svg/forms.svg#diplomas'; ?>"></svg> 

                <span>Diplomas</span> 
            </picture>
            <h1>Diplomas de Especialización</h1>
            </a>
        </li>
        <li class="tab-item tab tab-inhouse ">
            <a class="tab__link" href="#inhouse">
                <picture> 
                    <img class="tab__img-congress"  src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://igc.edu.pe/wp-content/themes/igc/assets/img/inhouse-tab-bg.png"  alt="cursos in-house">                                            
 <span>In-House</span> 
 <svg class="svg__hours"><use href="<?php echo get_bloginfo('template_directory').'/assets/svg/forms.svg#inhouse'; ?>"></svg> 

                </picture>
                <h1>Capacitación a la Medida - Cursos In-House</h1>
            </a>
        </li>
        <li class="indicator" style="left: 0px; right: 1005px;"></li>
    </ul>
    </div> 
</div>

<!-- Start Post -->
<div class="container m-auto pt-12 md:pt-8 category grid  sm:grid-cols-5">
    <section class="post  sm:col-span-4 ">
        <article id="courses">
            <h2 class="category-title">Cursos <span >Nuevos 2020 </span></h2>
            <a class="card" >
                <img class="w-full" src="https://igc.edu.pe/wp-content/uploads/2018/12/Administracion-fianaciera-gubernamental-.jpg" alt="">
                <div class="card-body">
                    <div  class="card-category mb-1" ><svg><use href="<?php echo get_bloginfo('template_directory').'/assets/svg/forms.svg#courses'; ?>"></svg> <span  class="text-black text-sm ml-1 ">Curso</span> </div>
                    <h2  class="card__title" >Especialización en Administracion financiera Gubernamental </h2>
                    <div  class="card-info" ><svg><use href="<?php echo get_bloginfo('template_directory').'/assets/svg/icons.svg#calendar'; ?>"></svg> <span class="card-info__attribute  " >Fecha: </span><span  class="card-info__value"> Lima, 10 de marzo 2020</span> </div>
                    <div  class="card-info" ><svg class=""><use href="<?php echo get_bloginfo('template_directory').'/assets/svg/icons.svg#certificado'; ?>"></svg> <span class="card-info__attribute " >Certificado: </span><span  class="card-info__value"> 24 horas academicas</span> </div>
                    <div  class="card-certify">
                        <h3>Certificado a nombre de:</h3>
                        <img  class=" w-32 sm:w-40 h-auto " src="https://esscuela.com/img/logo.png" alt="Escuela de Gerencia y Gestión">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline btn-outline-blue text-base" >Ver curso</button>
                    <div  class="card-footer-price" >
                        <svg><use href="<?php echo get_bloginfo('template_directory').'/assets/svg/icons.svg#price'; ?>"></svg> 
                        <var>S/.500.<span class="text-sm font-medium">00</span> </var>
                    </div>
                </div> 
            </a> 
        </article>
        <div id="congresses" class="">Test 2</div>
        <div id="diplomas" class="">Test 3</div>
        <div id="inhouse" class="">Test 4</div>
    </section>
    <aside class="sidebar bg-gray-300 mt-8 sm:mt-0 ">
        <h1>Sidebar</h1>
    </aside>
</div>
<!-- End Post --> 

<!-- Start Contact -->
<div class=" bg-blue-500 mt-40"> 
    <div class="container m-auto py-48">
        <div class="flex">
            <div  class="w-2/3"> 
                <h2  class="max-w-sm text-white" >Capacítate en los Programas más requeridos en la <span class="text-2xl text-orange-400" >Gestión Pública</span> </h2>
            </div>
            <div  class="w-1/3"> 
                <h1>formulario de contacto</h1>
            </div>
        </div>
    </div>
</div>
<!-- End Contact -->

<!-- Start Gallery -->
<div class="gallery">
    <h1>Galeria</h1>
</div>
<!-- End Gallery -->

<!-- Start Clients -->
<div class="clients">
    <h1>Clientes</h1>
    
</div>
<!-- End Clients --> 

<div class="container m-auto">
    <div class="grid grid-cols-3 gap-5">
        <div class="main col-span-2 ">
            <!-- tabs -->
            <br>


            <?php 
                    // // args
                    // $args = array(
                    //     'numberposts'	=> -1,
                    //     'posts_per_page'   => -1,
                    //     'post_type'		=> 'mis_congresos'
                    // ); 
                    // // query
                    // $the_query = new WP_Query( $args );  
                    // if($the_query ->have_posts()){
                    //     while($the_query ->have_posts()){
                    //         $the_query ->the_post();?>
            <!-- <li> <? // the_title()?></li> -->
            <? // }
                    // }

 

        
    ?>


            <!-- tab contenido -->

        </div>
    </div>
</div>




<div class="mb-8 h-56">
</div>