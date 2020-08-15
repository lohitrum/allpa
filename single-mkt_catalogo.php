<?php get_header(); ?>
<main role="main">
   <?php if (have_posts()): while (have_posts()) : the_post(); ?>
   <?php
    $pid = get_the_ID();
    // $categories = get_the_category();
    // $category_id = $categories[0]->cat_ID;
    // $cat = get_the_terms(get_the_ID(), 'secciontour');
    // $contador=0;    
    $thumb = get_the_post_thumbnail_url($pid, "full");    
    $subtexto = get_post_meta(get_the_ID(), '_mkt_subtexto_prod', true);      
    $image = get_post_meta($id, '_mkt_img_banner', true); 
    
?>

    
<section class="team__home__banner single__tour__banner" style="background-image:url(<?php echo $image; ?>)">
    <div class="container">                    
       <div class="row">            
       </div>            
    </div>
</section>
           
<section class="singlepage__internas--divisonesContent singlepage__catalogoContent">                     
    <div class="container">
        <div class="row">
            <div class="col-md-5">   
                <div class="singlepage__contenedor wow fadeIn" data-wow-delay="0.1s">
                    <div class="breadcrumb clearfix clearboth">
                            <?php bcn_display(); ?>
                            <!--breadcrumb-->
                    </div>         
                    <div class="singlepage__contenido">                    
                        <h2><?php echo get_the_title(); ?></h2>                    
                        <p><?php echo get_the_content(); ?></p>
                    </div>
                </div>                
            </div>
        </div>
    </div>                            
</section>
       

<section class="singlepage__internas--divisiones singlepage__catalogo">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">            
                <div class="singlepage__divisiones">                            
                           <p><?php echo $subtexto; ?>: </p>
                           <?php
                           $id = get_the_ID();
                           $divisongroup = get_post_meta($id, '_mkt_catalogo', true);  
                           if($divisongroup != "") {
                               foreach ($divisongroup as $arr){
                                   $titulodiv= $arr['_mkt_titulo_prod'];
                                   $descripdiv = $arr['_mkt_descrip_prod'];
                                   $imagen = $arr['_mkt_img_prod'];                                   
                                   echo '
                                   <div class="singlepage__divisiones--item">
                                      <div class="row">                                       
                                           <div class="col-md-4 col-sm-4">
                                               <div class="item__imagen wow fadeInLeft" data-wow-delay="0.1s">                                                    
                                                   <img src="'.$imagen.'" alt="" class="responsive">
                                               </div>
                                           </div>
                                           <div class="col-md-8 col-sm-8">
                                               <div class="item__descripcion wow fadeInRight" data-wow-delay="0.1s">
                                                   <h2>'.$titulodiv.'</h2>
                                                   <p>'.wpautop($descripdiv).' </p>
                                               </div>
                                           </div>                                       
                                       </div>
                                   </div>
                                   ';
                               }
                           } else {
                               echo '';
                           }                            
                       ?>   
                </div>
            </div>                   
        </div>
    </div>     
</section>

		<?php endwhile; ?>
	<?php endif; ?>
</main>

<?php get_template_part('loops/loop', 'revision'); ?>		
	    <?php get_template_part('loops/loop', 'home'); ?>

<?php get_footer(); ?>