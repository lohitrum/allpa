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
    $textobanner = get_post_meta(get_the_ID(), '_mkt_subtexto_prod', true);      
    $image = get_post_meta($id, '_mkt_banner_proyecto', true);
    
    
?>
<div class="home__somos__wrap">
	        <video autoplay muted loop id="myVideo">
              <source src="<?php bloginfo("template_url"); ?>/mp4/background.mp4" type="video/mp4">
            </video>
            <section class="home__somos single__bannertrabajos internas__trabajos single__bannerservicios">
		    <div class="container">
				<div class="row">					
					<div class="col-md-8">
						<div class="home__somos--contenido">
                            <div class="breadcrumb clearfix clearboth">
                                <?php bcn_display(); ?>
                                <!--breadcrumb-->
                            </div> 
                            <h3><?php echo get_the_title(); ?></h3>                            
                            <h2><?php echo $textobanner; ?></h2>
                            <p>Creamos la marca que tus clientes amarán. <a href="<?php the_permalink(10); ?>">Ver Trabajos</a></p>
                            <a href="#" class="btn__solicita">Solicita un Diágnostico Sin Costo</a>                    
						</div>
					</div>
					<div class="col-md-4 align-self-center">					 
                       <div class="home__gestion--atendido">
							<p class="first">Hasta hoy hemos<br/> atendido</p>
							<p><span class="line">118 emprendedores</span>
							<span>70 empresas</span></p>
					   </div>
				   </div>
				</div>
			</div>
		</section>	
		</div>
    
<!-- <section class="single__trabajos">
    <div class="container">                    
       <div class="row">
           <div class="col-md-12">
                <div class="single__trabajos--banner" style="background-image:url(<?php //echo $image; ?>)"></div>
           </div>
       </div>                
    </div>
</section>    -->

<section class="single__servicio">                     
    <div class="container">
        <div class="row">           
            <div class="col-md-12">                          
                <div class="single__contenido--content">                                          
                    <?php echo get_the_content(); ?>
                </div>                          
            </div>
        </div>
    </div>                            
</section>

		<?php endwhile; ?>
    <?php endif; ?>
    
    <section class="home__trabajos">
			<div class="home__trabajos--header">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6"><div class="home__trabajos--title"><h2>TRABAJOS DE <?php echo get_the_title(); ?></h2></div></div>
						<div class="col-md-6 col-sm-6"><div class="home__trabajos--wsp"><P><a href="https://wa.me/51959759632" target="_blank"><span>+51959759632</span> (WhatsApp)</a></P></div></div>
					</div>
				</div>
			</div>
			<div class="container">
				<?php 
					echo do_shortcode('[home__proyectos num="3"]');
				?>				
			</div>
		</section>
        <?php get_template_part('loops/loop', 'servicio'); ?>
</main>






<?php get_footer(); ?>