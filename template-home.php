<?php
 /* Template Name: Homepage */
?>
<?php get_header(); ?>

	<main role="main">
		<section class="home__slider">
			<?php echo do_shortcode('[slider id="20"]'); ?>
		</section>	

		<section class="home__delivery">
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
						<div class="home__delivery--autos">
							<h2><span>Baterías</span><br/>
                        	<img src="<?php bloginfo("template_url"); ?>/img/icons/plus.svg" alt="">Automotrices</h2>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-3">
								<div class="item--catalogo">
                                    <a href="#" class="catalogo__image__wrap">
										<img src="<?php bloginfo("template_url"); ?>/img/cat1.jpg" alt="">
                                     </a>
                                    <h3>Baterías para Camiones</h3>
                                    <p class="catalogo__categoria"><a href="<?php echo get_category_link(24); ?>">Ver marcas y modelos de baterías</a></p>
                                    <a href="<?php echo get_category_link(24); ?>" class="btn__comprar">Ver Baterías</a>
                                </div>
							</div>
							<div class="col-md-3">
								<div class="item--catalogo">
                                    <a href="#" class="catalogo__image__wrap">
										<img src="<?php bloginfo("template_url"); ?>/img/cat2.jpg" alt="">
                                     </a>
                                    <h3>Baterías para Autos</h3>
                                    <p class="catalogo__categoria"><a href="<?php echo get_category_link(13); ?>">Ver marcas y modelos de baterías</a></p>
                                    <a href="<?php echo get_category_link(13); ?>" class="btn__comprar">Ver Baterías</a>
                                </div>
							</div>
							<div class="col-md-3">
								<div class="item--catalogo">
                                    <a href="#" class="catalogo__image__wrap">
										<img src="<?php bloginfo("template_url"); ?>/img/cat3.jpg" alt="">
                                     </a>
                                    <h3>Baterías para Camionetas</h3>
                                    <p class="catalogo__categoria"><a href="<?php echo get_category_link(3); ?>">Ver marcas y modelos de baterías</a></p>
                                    <a href="<?php echo get_category_link(3); ?>" class="btn__comprar">Ver Baterías</a>
                                </div>
							</div>
							<div class="col-md-3">
								<div class="item--catalogo">
                                    <a href="#" class="catalogo__image__wrap">
										<img src="<?php bloginfo("template_url"); ?>/img/cat4.jpg" alt="">
                                     </a>
                                    <h3>Baterías para Maquinaria Pesada</h3>
                                    <p class="catalogo__categoria"><a href="<?php echo get_category_link(23); ?>">Ver marcas y modelos de baterías</a></p>
                                    <a href="<?php echo get_category_link(23); ?>" class="btn__comprar">Ver Baterías</a>
                                </div>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</section>

		<?php get_template_part('loops/loop', 'catalogo'); ?>

		<section class="acceso__rapido">
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
