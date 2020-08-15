<?php
 /* Template Name: Distribuidor */
?>

<?php get_header(); ?>

<main role="main">      
    
<section class="page__distribuidor">
        <div class="container">
            <div class="page__distribuidor--wrap">
                <div class="row">					
                    <div class="col-md-6">
                        <div class="page__distribuidor--titulo">
                            <h2>Distribuidores Autosup</h2>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="page__distribuidor--btn">
                            <a href="#">Ver Baterías</a>
                            <a href="#">Servicios Complementarios</a>                   
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="page__distribuidor--texto">
                            <div class="page__distribuidor--texto-ubicacion">
                                <h3>Principal - Variante de Uchumayo:</h3>
                                <p>Variante Uchumayo km 4 (referencia: esquina de Ladrillera el Diamante) - Cerro Colorado, Arequipa</p>
                                <a href="#">Ver Mapa</a>
                            </div>
                            <div class="page__distribuidor--texto-ubicacion">
                                <h3>Parque Industrial Rio Seco:</h3>
                                <p>Calle Brasil J-16 APTASA - Cerro Colorado, Arequipa.</p>
                                <a href="#">Ver Mapa</a>
                            </div>
                            <div class="page__distribuidor--texto-ubicacion">
                                <h3>Miraflores:</h3>
                                <p>Calle Puno N° 411 - Miraflores, Arequipa.</p>
                                <a href="#">Ver Mapa</a>
							</div>
                            <div class="page__distribuidor--texto-ubicacion">
                                <h3>Vía de Evitamiento:</h3>
                                <p>Vía de Evitamiento km 3.5 (al costado del Grifo Gamarra) - Cerro Colorado, Arequipa.</p>
                                <a href="#">Ver Mapa</a>
							</div>
                        </div>
                    </div>                    
                </div>
            
            </div>           
        </div>


        <div class="home__contacto">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="home__contacto--mapa">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1913.6971443312298!2d-71.57925782432694!3d-16.40478961629962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91423583a952ef59%3A0x2c579c57ff7dceec!2sVia%20Expresa%20Variante%20de%20Uchumayo%2C%20Cerro%20Colorado%2004013!5e0!3m2!1ses-419!2spe!4v1594455043169!5m2!1ses-419!2spe" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
								<div class="home__contacto--wrap">
									<img src="<?php bloginfo("template_url"); ?>/img/logo2.png" alt="">
										<p class="ubi">
										Variante de Uchumayo Km 4 
										Cerro Colorado (Esquina de
										la vía de evitamiento con la 
										variante) - Arequipa</p>
										<p class="phone"><a href="https://wa.me//958900678" target="_blank">958 900 678</a></p>
										<p class="mail"><a href="mailto:ventas@bateriasautomotrices.com">ventas@bateriasautomotrices.com</a></p>
										<div class="home__contacto--redes">
											<ul>
												<li><a href="#" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/icons/fb.svg" alt=""></a></li>
												<li><a href="#" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/icons/inst.svg" alt=""></a></li>
												<li><a href="#" target="_blank">@bateriasautomotrices</a></li>
											</ul>
										</div>
								</div>
						</div>
						
					</div>
				</div>
			</div>
        </div>


    </section>       
    <?php get_template_part('loops/loop', 'autosup'); ?>
</main>
<?php get_footer(); ?>