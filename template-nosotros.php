<?php
 /* Template Name: Nosotros */
?>

<?php get_header(); ?>

<main role="main">
    <section class="page__nosotros">
        <div class="container">
            <div class="row">					
                <div class="col-md-5 align-self-center">
                    <div class="page__nosotros--contenido">
                        <h3>+  Conoce a Autosup  -</h3>
                        <p><strong>2 generaciones y más de 35 años ofreciendo un servicio de gran calidad</strong> en el rubro de venta y distribución de baterías automotrices, complementos y accesorios en el sur del Perú con sede en Arequipa.<br/><br/>

                        <strong>Nos destacamos y se nos reconoce por nuestra rápidez y atención personalizada</strong>, que es enfocada en la satisfacción de nuestros clientes, siendo nuestro eje para seguir brindando lo mejor de nosotros con diferenciación y valor agregado.<br/><br/>

                            ¡Queremos que siempre estes en movimiento, con
                            un servicio completo de extremo a extremo!

                            </p>
                    </div>
                </div>
                <div class="col-md-7 align-self-top">                   
                </div>
            </div>
        </div>
    </section>	



    <section class="pages__nosotros--cualidades">
			<div class="container">
				<div class="row">
					<div class="col-md-6">											
					</div>
					<div class="col-md-6">
						<div class="home__delivery--contenido">
							<h2><strong>Delivery</strong><br/>
							 <span>en todo Arequipa</span>
								<a href="https://wa.me//958900678" target="_blank" class="delivery"><img src="<?php bloginfo("template_url"); ?>/img/icons/icon-tel.svg" alt=""> 958900678</a>
							</h2>
						</div>
					</div>
					<div class="col-md-12">
						<div class="pages__titulo--general">
							<h2><span>Nuestras</span><br/>
                        	<img src="<?php bloginfo("template_url"); ?>/img/icons/plus.svg" alt="">Cualidades</h2>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-3">
								<div class="pages__nosotros--cualidades-item">
                                    <img src="<?php bloginfo("template_url"); ?>/img/img-nosotros1.svg" alt="">
                                    <p>Rapidez de atención<br/> todos los días del año</p>
                                </div>
							</div>
							<div class="col-md-3">
                                <div class="pages__nosotros--cualidades-item">
                                    <img src="<?php bloginfo("template_url"); ?>/img/img-nosotros2.svg" alt="">
                                    <p>Servicio personalizado<br/> con asesoría permanente</p>
                                </div>
							</div>
							<div class="col-md-3">
                                <div class="pages__nosotros--cualidades-item">
                                    <img src="<?php bloginfo("template_url"); ?>/img/img-nosotros3.svg" alt="">
                                    <p>Te ofrecemos productos y<br/>
                                    servicios de verdadera calidad</p>
                                </div>
							</div>
							<div class="col-md-3">
                                <div class="pages__nosotros--cualidades-item">
                                    <img src="<?php bloginfo("template_url"); ?>/img/img-nosotros4.svg" alt="">
                                    <p>Trabajamos con honestidad<br/>
                                    y compromiso ante todo</p>
                                </div>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</section>
        <section class="page__nosotros--mantenimiento" > 
            <div class="container">                       
                    <div class="row">
                        <div class="col-md-6">
                            <div class="page__nosotros--mantenimiento-ventas">
                                <h3>Venta de Baterías Automotrices para todo tipo de vehículo en todo Arequipa</h3>
                                <p>En marcas ALFA, GLOBAL, ENERJET y ETNA para autos particulares, taxis, custers, buses, camionetas, camiones americanos, camiones medianos, europeos y maquinaria pesada.</p>
                                <nav>
                                    <a href="<?php the_permalink(10); ?>" class="btn__azul">Ver Baterías</a>
                                    <a href="https://wa.me//958900678" target="_blank" class="btn__azul">Te Asesoramos</a>
                                    <a href="https://wa.me//958900678" target="_blank" class="llamanos">Llámanos al<br/><span>958900678</span> </a>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mantenimiento">
                                <div class="mantenimiento__contenido">
                                    <h2><span>Mantenimiento de</span><br/>
                                    <img src="<?php bloginfo("template_url"); ?>/img/icons/plus.svg" alt="">Baterías Automotrices</h2>
                                    <div class="mantenimiento__contenido--costo">
                                        <h3><span>Sin costo por 1 año</span><br/>
                                        por la compra de baterías</h3>
                                    </div>
                                    <div class="mantenimiento__contenido--tel">
                                        <a href="https://wa.me//958900678" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/icons/chat.png" alt=""> 958900678</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
            </div>
        </section>
        
        <section class="acceso__rapido page__nosotros--acceso">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="acceso__rapido--item">
							<img src="<?php bloginfo("template_url"); ?>/img/icons/acceso1.svg" alt="">
							<a href="<?php the_permalink(12); ?>">Servicios Complementarios</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="acceso__rapido--item">
							<img src="<?php bloginfo("template_url"); ?>/img/icons/acceso2.svg" alt="">
							<a href="<?php the_permalink(78); ?>">Distribuidores Autosup</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="acceso__rapido--item">
							<img src="<?php bloginfo("template_url"); ?>/img/icons/acceso3.svg" alt="">
							<a href="#small-dialog" data-effect="mfp-zoom-in"  class="btn__cotiza popup-with-zoom-anim">Cotiza tu Batería</a>
						</div>
					</div>
				</div>
			</div>
		</section>

    <?php get_template_part('loops/loop', 'contactohome'); ?>
    <?php get_template_part('loops/loop', 'instagram'); ?>
	<?php get_template_part('loops/loop', 'autosup'); ?>	   
</main>
<?php get_footer(); ?>