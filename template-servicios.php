<?php
 /* Template Name: Servicios */
?>

<?php get_header(); ?>

<main role="main">      
     <section class="page__servicios">
        <div class="container">
            <div class="page__servicios--wrap">
                <div class="row row--servicio">					
                    <div class="col-md-6">
                        <div class="page__servicios--titulo">
                            <h2>Servicios Complementarios</h2>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="page__servicios--btn">
                            <a href="<?php the_permalink(10); ?>">Ver Baterías</a>                   
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"><div class="page__servicios--line"></div></div>                    
                    <div class="col-md-6">
                        <div class="page__servicios--item">
                            <div class="page__servicios--item-content">
                                <h2>Instalación de Baterías a Domicilio</h2>
                                <p>La instalación de baterías se realiza en nuestro local y también a domicilio, para clientes corporativos el servicio a domicilio o delivery es SIN COSTO, todo el trabajo de instalación se hace con asesoría previa para que pueda elegir la batería adecuada.
                                <a href="#">Ver Brochure</a></p>                        
                            </div>
                            <img class="img__servicio" src="<?php bloginfo("template_url"); ?>/img/img-servicio1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="page__servicios--item">
                            <div class="page__servicios--item-content">
                                <h2>Arranque de Todo Tipo de Vehículo</h2>
                                <p>Si tu vehículo esta varado en tu garage o en cualquier situación, nosotros te sacamos del apuro en forma coordinada e inmediata sin ningún inconveniente, ayudando a aliviar ese gran dolor de cabeza que genera este apuro.
                                <a href="#">Ver Brochure</a></p>
                            </div>
                            <img class="img__servicio" src="<?php bloginfo("template_url"); ?>/img/img-servicio2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="page__servicios--item">
                            <div class="page__servicios--item-content">
                                <h2>Mantenimiento y Carga de Baterías</h2>
                                <p>Realizamos el mantenimiento integral y carga de todo tipo de baterías, nuestros clientes más recurrentes debido a su alto uso son camiones, semitrailers, custers y taxis,  son los vehículos que sufren mucho más desgaste que otros por el esfuerzo constante.
                                <a href="#">Ver Brochure</a></p>
                            </div>
                            <img class="img__servicio" src="<?php bloginfo("template_url"); ?>/img/img-servicio3.jpg" alt="">
                            <div class="home__delivery--contenido">
                                <h2><strong>Delivery</strong><br/>
                                <span>en todo Arequipa</span>
                                    <a href="https://wa.me//958900678" target="_blank" class="delivery"><img src="<?php bloginfo("template_url"); ?>/img/icons/icon-tel.svg" alt=""> 958900678</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="page__servicios--item">
                            <div class="page__servicios--item-content">
                                <h2>Reparación de Baterías</h2>
                                <p>¡Transformamos su batería dañada y la dejamos como nueva!, el proceso de reparación de su batería inicia con una evaluación que nos permite tener un diagnóstico que determinará el trabajo por hacer, ¡tu batería quedará 100% óptima!.
                                <a href="#">Ver Brochure</a></p>
                            </div>
                            <img class="img__servicio" src="<?php bloginfo("template_url"); ?>/img/img-servicio4.jpg" alt="">
                            <div class="home__delivery--contenido">
                                <h2><strong>Delivery</strong><br/>
                                <span>en todo Arequipa</span>
                                    <a href="https://wa.me//958900678" target="_blank" class="delivery"><img src="<?php bloginfo("template_url"); ?>/img/icons/icon-tel.svg" alt=""> 958900678</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
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
       
    <?php get_template_part('loops/loop', 'contactohome'); ?>
    <?php get_template_part('loops/loop', 'bloghome'); ?>    
    <?php get_template_part('loops/loop', 'autosup'); ?>
</main>
<?php get_footer(); ?>