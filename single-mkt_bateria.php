<?php get_header(); ?>
<main role="main">
   <?php if (have_posts()): while (have_posts()) : the_post(); ?>
   <?php
    $pid = get_the_ID();
    // $categories = get_the_category();
    // $category_id = $categories[0]->cat_ID;
    // $cat = get_the_terms(get_the_ID(), 'secciontour');
    // $contador=0;    
    $thumb = get_the_post_thumbnail_url($pid, "large");          
    $image = get_post_meta($id, '_mkt_banner_proyecto', true); 

    $garantia = get_post_meta(get_the_ID(), '_mkt_garantia_bateria', true);
    $mantenimiento = get_post_meta(get_the_ID(), '_mkt_mantenimiento_bateria', true);
    $ficha = get_post_meta(get_the_ID(), '_mkt_ficha_bateria', true);    
    
    $terms = get_terms('seccionbateria');
?>
    
<section class="single__baterias">
    <div class="container">
        <div class="single__baterias--wrap">
            <div class="row">
                <div class="col-md-12">
                        <div class="single__baterias--titulo">
                            <h2><?php echo get_the_title(); ?></h2>
                        </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-4">
                    <div class="single__baterias--banner">
                        <img src="<?php echo $thumb; ?>" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="single__baterias--contenido">
                        <div class="single__baterias--contenido-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single__baterias--contenido-cat">                                    
                                        <?php           
                                            $numItems = count(get_the_terms(get_the_ID(), 'seccionbateria') );
                                            $i = 0;                                                                                                                                                            
											foreach ( get_the_terms(get_the_ID(), 'seccionbateria') as $cat) {                                                
                                                echo '<a href="'.get_term_link($cat->slug, 'seccionbateria').'">'.$cat->name.'</a><span>|</span> ';                                                                                              
                                                if(++$i === $numItems) {
                                                    echo '<a href="'.get_term_link($cat->slug, 'seccionbateria').'">'.$cat->name.'</a>';     
                                                }
											}
										?>            
                                        <?php		                                        								
											foreach (get_the_terms(get_the_ID(), 'marcabateria') as $cat) {												
												 echo '
												 <span>|</span><a href="'.get_term_link($cat->slug, 'marcabateria').'">'.substr($cat->name, 8, 15).'</a>';
											}
										?>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <div class="single__baterias--contenido-btn">
                                        <a href="<?php the_permalink(10); ?>">Volver <</a>
                                        <a href="<?php the_permalink(12); ?>">Servicios Complementarios</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single__baterias--contenido-texto">                                          
                            <?php echo apply_filters( 'the_content', get_the_content() ); ?>
                            <div class="single__baterias--contenido-garantia">
                                <p class="garantia icon1">Garantía <?php echo $garantia; ?></p>
                                <p class="garantia icon2">Mantenimiento <?php echo $mantenimiento; ?></p>                                                                
                                <a href="<?php echo $ficha;?>" download>Descargar Ficha Técnica</a>
                            </div>                            
                            
                            <p class="beneficios">Descúbre Nuestros beneficios corporativos (empresas) <a href="<?php the_permalink(14); ?>">Aquí</a></p>
                            <nav>
                                <a href="#small-dialog" data-effect="mfp-zoom-in" data-title="<?php echo  get_the_title();?>" class="btn__cotiza popup-with-zoom-anim">Cotizar Ahora</a>                                
                                <a href="https://wa.me//958900678" target="_blank" class="llamanos">Llámanos al<br><span>958900678</span> </a>    
                                <a href="https://wa.me//958900678" target="_blank" class="whatsapp">escríbenos a nuestro WhatsApp</a>                                
                            </nav>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalogo__contenedor">                                                                                                               	
                <div class="row">
                            <div class="col-md-3">                                             
                                <aside class="catalogo__sidebar">                                                
                                        <div class="catalogo__contacto">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="catalogo__contacto--titulo">
                                                        <h2>¿Buscas una batería en especial?</h2>
                                                        <p>A continuación ingresa tu solicitud y te atenderemos lo más pronto posible.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php echo do_shortcode('[contact-form-7 id="52" title="Formulario de bateria"]'); ?>                           
                                        </div>
                                        <div class="catalogo__contacto--nota">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="catalogo__contacto--descripcionnota">
                                                        <p>Para atención inmediata llámanos
                                                        ó escríbenos al <strong><a href="https://wa.me//958900678" target="_blank" >WhatsApp 
                                                        958900678</a></strong>.</p>
                                                        <p><strong>¡IMPORTANTE!</strong> para elegir la batería
                                                        correcta también debes tener en
                                                        cuenta la necesidad del vehículo, 
                                                        la batería original y el combustible
                                                        que usas.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="catalogo__servicio">
                                            <div class="interno"><img class="tel" src="<?php bloginfo("template_url"); ?>/img/icons/icon-tel.svg" alt=""><a href="https://wa.me//958900678" target="_blank">Servicio a Domicilio 958900678</a></div>
                                            <img class="domicilio" src="<?php bloginfo("template_url"); ?>/img/domicilio.svg" alt="">
                                        </div>
                                </aside>
                            </div><!--col-->
                            <div class="col-md-9">
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="post-listing--titulo-single">
                                                <h2>También te puede interesar</h2>
                                            </div>
                                        </div>
                                </div>
                                <?php                                
                                    $wrapclass = "front";
                                    $args = array(
                                        'post_type' => 'mkt_bateria',
                                        'posts_per_page' => 12,                                                    
                                        'orderby' => 'rand'                                   
                                    );
                                    $GLOBALS['wp_query'] = new WP_Query($args);                                
                                ?>                                
                                <div class="post-listing" data-wrap="<?php echo $wrapclass; ?>">                                    
                                    <div class="loopprod__wrap">
                                        <div class="row">
                                            <?php                             
                                                if (have_posts()) { 
                                                    while (have_posts()) { 
                                                    the_post();   
                                                    $pid = get_the_ID();
                                                    $thumb = get_the_post_thumbnail_url($pid, "thumbnail");
                                                    $colores = get_post_meta( $pid, "_mkt_colores", true );
                                                    $subtitulo = get_post_meta( $pid, "_mkt_subtitulo", true );
                                                    $precio = get_post_meta( $pid, "_mkt_precio", true );
                                                    $informacion = get_post_meta($pid, "_mkt_informacion", true);
                                                    echo '<div class="col-md-4 item__wrap" id="producto-'.$pid.'" data-precio="'.$precio.'">
                                                            <div class="item item--catalogo">
                                                                <a href="'.get_the_permalink().'" class="catalogo__image__wrap">
                                                                    <img src="'.$thumb.'"  id="imagen-'.$pid.'">
                                                                </a>
                                                                <h3>'.get_the_title().'</h3>
                                                                <p class="catalogo__categoria">'.$informacion.'</p>
                                                                <a href="'.get_the_permalink().'" class="btn__comprar">Comprar</a>
                                                            </div>
                                                        </div><!--col-->';
                                                    }
                                                } else {
                                                    echo '<div class="col-md-12"><p class="align-center">'.__( 'Sorry, nothing to display.', 'maketabase' ).'</p></div>';
                                                }
                                                wp_reset_query();
                                            ?>
                                        </div><!--row-->
                                    </div>                                       
                                </div><!--post-listing--> 
                            </div><!--col-->
                        </div><!--row-->                
                    </div><!--tab-pane--> 
                </div>
                <div class="medios__pagos">        
                    <div class="row">
                        <div class="col-md-2 align-self-center">
                            <div class="medios__pagos--texto">
                                <p>Aceptamos todos los 
                                medios de pago</p>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="medios__pagos--item">
                                <ul>
                                    <li><img class="tel" src="<?php bloginfo("template_url"); ?>/img/icons/visa.svg" alt=""></li>
                                    <li><img class="tel" src="<?php bloginfo("template_url"); ?>/img/icons/mastercard.svg" alt=""></li>
                                    <li><img class="tel" src="<?php bloginfo("template_url"); ?>/img/icons/diners.svg" alt=""></li>
                                    <li><img class="tel" src="<?php bloginfo("template_url"); ?>/img/icons/yape.svg" alt=""></li>
                                    <li><img class="tel" src="<?php bloginfo("template_url"); ?>/img/icons/cmr.svg" alt=""></li>
                                    <li><img class="tel" src="<?php bloginfo("template_url"); ?>/img/icons/ripley.svg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>    
</section>   


		<?php endwhile; ?>
    <?php endif; ?>
    
<?php get_template_part('loops/loop', 'bloghome'); ?>	
<?php get_template_part('loops/loop', 'autosup'); ?>

</main>



<?php get_footer(); ?>