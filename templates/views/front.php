 
 
    
   <div class="max-w-6xl m-auto  shadow">  
         <!-- <img  class="w-full " src="https://d2fc2l3thsf47o.cloudfront.net/images/e-content-banner.jpg" alt="">    -->
       
        <div class="flex">
            <div class="w-2/3">
                 <h1 class="" >Contenido Principal 1</h1>
                <h2  class="" >Contenido Principal 2</h2>
                <h3  class="" >Contenido Principal 3</h3>
                <h4  class="" >Contenido Principal 4</h4>     
                <h5  class="" >Contenido Principal 5</h5>
            </div>
            <div class="w-1/3 p-4">
                
            </div>
        </div> 
   </div>     
   <div class="container h-10"> 
   </div>  
   <div class="container m-auto">
       <div class="grid grid-cols-3 gap-5">
           <div class="main col-span-2 ">
            <!-- tabs -->
            <div  class="" >
                <ul class="tab" id="tab" >
                    <li class="tab-item" > <a href="#temario">Temario</a> </li>
                    <li class="tab-item" > <a href="#certificado">Certificado</a> </li>
                    <li class="tab-item" > <a href="#docentes">Docentes</a> </li>
                    <li class="tab-item" > <a href="#inversion">Inversion</a> </li> 
                </ul>
            </div> 
            <!-- tab contenido -->
            <div class="tab-body pt-5">
                <!-- <div id="temario">  
                <?php
                    // args
                    $args = array(
                        'numberposts'	=> -1,
                        'posts_per_page'   => 2,
                        'post_type'		=> 'mis_congresos'
                    ); 
                    // query
                    $the_query = new WP_Query( $args );  
                    if( $the_query->have_posts() ): 
                        while( $the_query->have_posts() ) :$the_query->the_post(); ?>  
                                <div class=""> 
                                <?php 
                                    if( have_rows('congreso_temario')):  
                                            while ( have_rows('congreso_temario') ) : the_row();   	
                                            if( have_rows('congreso_presentacion')):  
                                                    while ( have_rows('congreso_presentacion') ) : the_row();   	
                                                        $congreso_presentacion_titulo = get_sub_field('congreso_presentacion_titulo');  
                                                        $congreso_presentacion_descripcion = get_sub_field('congreso_presentacion_descripcion');
                                                    ?>
                                                      <div class="mt-8">
                                                         <h2> <?php echo $congreso_presentacion_titulo ?> </h2>  
                                                         <?php echo $congreso_presentacion_descripcion ?> 
                                                      </div> 
                                            
                                                <?php   
                                                    endwhile; 
                                            else : 
                                                    echo '<span class="bg-info">Sin Presentacion</span>'; 
                                            endif; 
                                            ?>
                                                <?php   
                                                    endwhile; 
                                            else : 
                                                    echo '<span class="bg-info">Sin Temario</span>'; 
                                            endif; 
                                            ?>
                                </div>   

                    <?php endwhile;
                    else:
                        printf('<p>No hay entradas</p>');
                    endif;
                    rewind_posts();  ?> 
                 

                </div>   -->
                <div id="temario" class="section scrollspy" >
                    <h2  class="" >Presentacion</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                      <p class="mt-12" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                     
                    <div  class="tab-body-tematica" >

                    <ul class="collapsible">
                        <li class="collapsible-item" >  
                        <div class="collapsible-header">First</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li class="collapsible-item" >  
                        <div class="collapsible-header">Second</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li class="collapsible-item" >  
                        <div class="collapsible-header">Third</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                    </ul>

                    </div>

                </div> 
                <div id="certificado" class="mb-8  section scrollspy">
                    <h2>Certificado</h2>  
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                    
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                      <p class="mt-12" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                    
                </div> 
                <div id="docentes" class="mb-8  section scrollspy">
                    <h2>Docentes</h2>  
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                      <p class="mt-12" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                    
                </div> 
                <div id="inversion" class="mb-8  section scrollspy">
                    <h2>Inversion</h2>  
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                    <p class="mt-12" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                    <p class="mt-12" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                    
                    
                </div> 
            </div>
           </div>
            <div class="aside">
                <article  class="rounded shadow overflow-hidden" > 
                        <a href="#">
                        <figure>
                            <img src="https://i.ytimg.com/vi/x_JbIl9SS0E/maxresdefault.jpg" alt="">
                        </figure> 
                        <div  class="p-6" >
                            <h1>Title</h1>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor sit amet. dw</p>
                        </div>
                        </a>
                  </article>
            </div>
       </div>
   </div>


 

   <div class="mb-8"    >
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa esse deleniti error, pariatur, tempore fugiat in commodi voluptatibus cupiditate quia possimus, nulla asperiores! Ratione, alias. Iusto magnam officiis quis quod.</p>
   </div>
  
   <div class="mb-8 h-56"   >
    </div>
  
   <div class="mb-8 h-56"   >
    </div>
   <div class="mb-8 h-56"   >
    </div>