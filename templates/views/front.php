<div class="h-20"></div>
 

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
<div class="container m-auto pt-12 md:pt-8">
    <div id="courses" class="">
        <h2 class="text-md mb-4">Cursos <span  class="bg-orange-600 text-white rounded-full py-1 px-2 text-sm " >Nuevos 2020 </span></h2>
        <a class="card  w-full text-black" >
            <img class="w-full" src="https://igc.edu.pe/wp-content/uploads/2018/12/Administracion-fianaciera-gubernamental-.jpg" alt="">
            <div class="card-body py-4 px-6 bg-white">
                 <div  class="mb-1" ><svg class="inline-block align-text-top w-5 h-5 text-black fill-current"><use href="<?php echo get_bloginfo('template_directory').'/assets/svg/forms.svg#courses'; ?>"></svg> <span   class="text-black">Curso</span> </div>
                 <h2  class="pt-1 pb-2 border-b  border-gray-300 uppercase  text-blue-500 font-semibold mb-5" >Especialización en Administracion financiera Gubernamental </h2>
                 <div  class="" ><svg class=" inline-block align-text-top mr-1 mb-2  w-5 h-5 text-blue-500 fill-current "><use href="<?php echo get_bloginfo('template_directory').'/assets/svg/icons.svg#calendar'; ?>"></svg> <span class="text-black font-cooperhewitteg  " >Fecha: </span><span  class="text-gray-700 text-sm"> Lima, 10 de marzo 2020</span> </div>
                 <div  class="" ><svg class=" inline-block align-text-top mr-1 mb-2  w-5 h-5 text-blue-500 fill-current "><use href="<?php echo get_bloginfo('template_directory').'/assets/svg/icons.svg#certificado'; ?>"></svg> <span class="text-black font-cooperhewitteg " >Certificado: </span><span  class="text-gray-700 text-sm"> 24 horas academicas</span> </div>
                 <div  class=" inline-flex w-full items-center shadow rounded p-3  mt-3">
                    <h3  class=" text-sm sm:text-lg align-bottom leading-none  mr-2" >Certificado a nombre de:</h3>
                    <img  class=" w-32 sm:w-40 h-auto " src="https://esscuela.com/img/logo.png" alt="Escuela de Gerencia y Gestión">
                 </div>
            </div>
            <div class="card-footer bg-gray-200 flex justify-between items-center px-6 py-1  ">
                <button  class="btn btn-outline btn-outline-blue text-sm" >Ver curso</button>
                <div>
                    <svg class=" inline-block align-text-top mr-1   w-5 h-5 text-blue-500 fill-current "><use href="<?php echo get_bloginfo('template_directory').'/assets/svg/icons.svg#price'; ?>"></svg> 
                    <var class="font-latoeg not-italic text-blue-500 text-xl font-normal" >S/.500.<span class="text-sm font-medium">00</span> </var>
                </div>
            </div> 
        </a>

    

    </div>
    <div id="congresses" class="">Test 2</div>
    <div id="diplomas" class="">Test 3</div>
    <div id="inhouse" class="">Test 4</div>
</div>



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