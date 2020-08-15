<?php
 /* Template Name: Empresa */
?>

<?php get_header(); ?>

<main role="main">      
     <section class="page__empresa">
        <div class="container">
            <div class="page__empresa--wrap">
                <div class="row">					
                    <div class="col-md-6">
                        <div class="page__empresa--titulo">
                            <h2>Servicio para Empresas</h2>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="page__empresa--btn">
                            <a href="<?php the_permalink(10); ?>">Ver Baterías</a>
                            <a href="<?php the_permalink(12); ?>">Servicios Complementarios</a>                   
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="page__empresa--texto">
                            <p>Tenemos un servicio pensado en las necesidades únicas de las empresas y corporaciones, de esta forma ponemos a su disposición nuestros productos y servicios, con los siguientes beneficios:</p>
                        </div>
                    </div>
                    <div class="col-md-12">
						<div class="row">
							<div class="col-md-3">
								<div class="pages__empresa--cualidades-item">
                                    <img src="<?php bloginfo("template_url"); ?>/img/empresa1.svg" alt="">
                                    <p>Entregas inmediatas<br/>
                                    o programadas</p>
                                </div>
							</div>
							<div class="col-md-3">
                                <div class="pages__empresa--cualidades-item">
                                    <img src="<?php bloginfo("template_url"); ?>/img/empresa2.svg" alt="">
                                    <p>Facilidades de<br/>
                                    pago</p>
                                </div>
							</div>
							<div class="col-md-3">
                                <div class="pages__empresa--cualidades-item">
                                    <img src="<?php bloginfo("template_url"); ?>/img/empresa3.svg" alt="">
                                    <p>Cargas de baterías y<br/>
                                    reparaciones a costo cero</p>
                                </div>
							</div>
							<div class="col-md-3">
                                <div class="pages__empresa--cualidades-item">
                                    <img src="<?php bloginfo("template_url"); ?>/img/empresa4.svg" alt="">
                                    <p>Garantía de hasta<br/>
                                    12 meses</p>
                                </div>
							</div>
						</div>
					</div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="page__empresa--cuadro-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="page__empresa--cuadro-texto d-none d-md-block d-lg-block">
                                        <h2>Algunos de Nuestros Clientes Corporativos</h2>                                      
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <div class="page__empresa--cuadro-btn">
                                        <nav>
                                            <a href="#" class="btn__azul">Contáctanos Ahora</a>
                                            <a href="#" class="btn__azul">Ver Brochure</a>
                                            <a href="https://wa.me//958900678" target="_blank" class="llamanos">Llámanos al<br/><span>958900678</span> </a>
                                        </nav>                              
                                    </div>
                                    <div class="page__empresa--cuadro-texto d-block d-md-none d-lg-none">
                                        <h2>Algunos de Nuestros Clientes Corporativos</h2>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="page__empresa--cuadro">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="page__empresa--cuadro-item">
                                        <a href="http://www.ricopollo.pe/" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/logo-empresa1.jpg" alt=""></a>
                                        <p><a href="" target="_blank">Corporación Rico Pollo S.A.C</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="page__empresa--cuadro-item">
                                        <a href="https://ladrillosdiamante.com/" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/logo-empresa2.jpg" alt=""></a>
                                        <p><a href="https://ladrillosdiamante.com/" target="_blank">Ladrillera el Diamante S.A.C</p></a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="page__empresa--cuadro-item">
                                        <a href="https://www.facebook.com/pages/category/Industrial-Company/IMCO-Servicios-SAC-117127785055013/" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/logo-empresa3.jpg" alt="">
                                        <p><a href="https://www.facebook.com/pages/category/Industrial-Company/IMCO-Servicios-SAC-117127785055013/" target="_blank">IMCO Servicios S.A.C</p>  
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="page__empresa--cuadro-item">
                                        <a href="http://www.kala.pe/" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/logo-empresa4.jpg" alt=""></a>
                                        <p><a href="http://www.kala.pe/" target="_blank">Transportes KALA S.A.C</p></a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="page__empresa--cuadro-item">
                                        <a href="https://www.zetramsa.com.pe/" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/logo-empresa5.jpg" alt=""></a>
                                        <p><a href="https://www.zetramsa.com.pe/" target="_blank">Transportes Zetramsa S.A.C</p></a> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="page__empresa--cuadro-item">
                                        <a href="http://www.reyna.com.pe/" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/logo-empresa6.jpg" alt=""></a>
                                        <p><a href="http://www.reyna.com.pe/" target="_blank">Transporte y Turismo Reyna S.A.</p></a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </section>        
       
    <?php get_template_part('loops/loop', 'instagram'); ?>
    <?php get_template_part('loops/loop', 'bloghome'); ?>    
    <?php get_template_part('loops/loop', 'autosup'); ?>
</main>
<?php get_footer(); ?>