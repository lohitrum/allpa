<?php
 /* Template Name: Nosotros */
?>

<?php get_header(); ?>

<main role="main">
    <section class="page__nosotros">
        <div class="container">
            <div class="row">					
                <div class="col-md-12 align-self-center">
                    <div class="page__nosotros--contenido">
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <h3>Cónoce a Allpa Inti</h3>
                                <p>Somos una empresa desarrollada con el corazón, orientada a darle valor a nuestra tierra, su gente y a sus cultivos, desarrollando capacidades de innovación y tecnología en todos nuestros procesos, permitiendo así la obtención de productos como la papa única, papa canchan, palta Has y cebolla morada de gran calidad para satisfacer a nuestros clientes en todo el Perú.</p>
                            </div>
                            <div class="col-md-6">
                                <div class="page__nosotros--contenido--img">
                                    <img src="<?php bloginfo("template_url"); ?>/img/img-nosotros.jpg" alt="">
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>               
            </div>
        </div>
    </section>	



    <section class="pages__nosotros--cultivos">
			<div class="container">
				<div class="row">
					<div class="col-md-12">											
                        <h2 class="titulo">Cultivos ricos en cultura que son logrados<br/>
                        gracias a nuestros valores</h2>
					</div>					
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="page__nosotros--cultivos--contenido">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="page__nosotros--cultivos--item">                                    
                                        <div class="page__nosotros--cultivo--wrap">
                                            <img src="<?php bloginfo("template_url"); ?>/img/img-cultivo1.svg" alt="">
                                            <p>Honestidad y <br/>
                                            Compromiso</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="page__nosotros--cultivos--item">
                                        <div class="page__nosotros--cultivo--wrap">                                
                                            <img src="<?php bloginfo("template_url"); ?>/img/img-cultivo2.svg" alt="">
                                            <p>Innovación y <br/>
                                            tecnología</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="page__nosotros--cultivos--item">
                                        <div class="page__nosotros--cultivo--wrap">                             
                                            <img src="<?php bloginfo("template_url"); ?>/img/img-cultivo3.svg" alt="">
                                            <p>Trabajo en<br/>
                                            Equipo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<div class="home__compromiso--item item1">
							<h2>Compromiso Social</h2>
							<p>Generamos oportunidades para el desarrollo integral y la mejora en las condiciones de vida de nuestro capital humano, sus familias y la comunidad.</p>
						</div>
						<div class="home__compromiso--item item2">
							<h2>Compromiso Ambiental</h2>
							<p>Promovemos el uso eficiente del agua, la energía y el tratamiento adecuado de residuos para preservar el medio ambiente para las siguientes generaciones.</p>
						</div>
						<div class="home__compromiso--item item3">
							<h2>Compromiso Cultural</h2>
							<p>Queremos fortalecer el lazo emocional de nuestra cultura gastronómica para que no se pierdan las tradiciones y el consumo de lo nuestro se mantenga en el tiempo.</p>
						</div>
					</div>
				</div>			
			</div>
        </section>        
        
</main>
<?php get_footer(); ?>