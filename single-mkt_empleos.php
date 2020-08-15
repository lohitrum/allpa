<?php get_header(); ?>

<main role="main">
<section class="home__agencia">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home__agencia--contenido">
                        <h2>Si tienes el talento,<br/>
                        <span>te esperamos en KORI</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

<section class="empleo__intro">
    <div class="container">
        <h2>Estamos en busca de</h2>
    </div>
</section>        
                        
    
<article class="empleo__contenido">
    <div class="container">  
       <div class="empleo__contenido__wrap">
          <?php if (have_posts()) { while (have_posts()) { the_post(); ?>
           <div class="row">
               <div class="col-md-3">
                   <div class="empleo__img">
                        <?php echo get_the_post_thumbnail($pid, "full", array('class' => 'responsive')); ?>
                    </div>
                    
                    <div class="empleo__compartir">
                        <h6>Compartir en:</h6>                      
                           <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                               <i class="fab fa-facebook-f"></i>
                           </a>

                           <a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
                               <i class="fab fa-twitter"></i>
                           </a>

                           <a href="https://pinterest.com/pin/create/bookmarklet/?media=//images.ctfassets.net/qjx9xgp99sha/sZ9dgGduHtvGhL47yzgk6/fe18d2e332f5ae5556e88bf826df691f/painted-furniture_trim_seizethegray_blog_clare_paint_hero.JPG&url=<?php the_permalink(); ?>&description=<?php the_title(); ?>" target="_blank">
                               <i class="fab fa-pinterest-p"></i>
                           </a>

                           <a href="whatsapp://send?text=<?php echo urlencode(get_the_permalink()) ?>">
                               <i class="fab fa-whatsapp"></i>
                           </a>
                        </div>
               </div>
                <div class="col-md-9 empleo__detalles">
                  <div class="row">
                      <div class="col-md-8">
                           <h3 class="empleo__title"><?php the_title(); ?></h3>
                        </div>
                        <div class="col-md-4 align-self-center align-right">
                            <div class="empleo__fecha">Publicado el <?php the_date("d/m/Y"); ?></div>
                        </div>
                    </div>
                    
                    <div class="row">
                       <div class="col-md-12">
                            <?php the_content(); ?>
                            <div class="empleo__botones">
                                <a href="#small-dialog" data-effect="mfp-zoom-in" class="btn btn-postular btn__postular popup-with-zoom-anim d-none d-sm-inline-block">Postular</a>
                                <a href="<?php the_permalink(); ?>" class="btn">Ver más puestos</a>                
                            </div>         
                        </div>
                    </div>
               </div>
            </div>
            <?php } } ?>
        </div>     
    </div>
</article>

    <!-- <section class="trabaja__registro">
          <div class="container">
              <div class="trabaja__registro__wrap">
                   <h3>Completa el Registro</h3>
                   <div class="row">
                       <div class="col-md-7">
                           <?php //echo do_shortcode('[contact-form-7 id="113" title="Postular trabajo"]'); ?>
                       </div>
                   </div>
                </div>
           </div>
       </section> -->


       <div id="small-dialog" class="white-popup popup__puesto mfp-with-anim mfp-hide zoom-anim-dialog">
            <div class="popup__show">
                <div class="trabaja__registro__wrap">
                   <h3>Un paso más cerca para formar parte del equipo KORI, te 
                    invitamos a completar el formulario a continuación:</h3>                  
                   <?php echo do_shortcode('[contact-form-7 id="159" title="Postular Trabajo - puesto"]'); ?>
                   <img class="form__logo" src="<?php bloginfo("template_url"); ?>/img/logo.svg">                 
                </div>
            </div><!--Popup Show-->
            <div class="popup__hide">
                <div class="popup__puesto__respuesta">
                    <img src="<?php bloginfo("template_url"); ?>/img/icons/image-respuesta.png">
                    <h2>¡Muchas Gracias!</h2>
                    <p>El formulario se envió de forma exitosa
                        dentro de los próximos 7 días tendrás noticias
                        de nosotros. ¡Buen día!
                    </p>
                    <img class="form__logo" src="<?php bloginfo("template_url"); ?>/img/logo.svg">
                </div>
            </div><!--Popup Hide-->
        </div>




       <?php get_template_part('loops/loop', 'bloghome'); ?>
</main>
<?php get_footer(); ?>