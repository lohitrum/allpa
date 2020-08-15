<?php get_header(); ?>

	<main role="main" class="blog">		
		<!-- section -->
		<?php 			
			get_template_part('loops/loop', 'catalogo'); 
		?>
		
		<section class="acceso__rapido">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="acceso__rapido--item">
							<img src="<?php bloginfo("template_url"); ?>/img/icons/acceso1.svg" alt="">
							<a href="#">Servicios Complementarios</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="acceso__rapido--item">
							<img src="<?php bloginfo("template_url"); ?>/img/icons/acceso2.svg" alt="">
							<a href="#">Distribuidores Autosup</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="acceso__rapido--item">
							<img src="<?php bloginfo("template_url"); ?>/img/icons/acceso3.svg" alt="">
							<a href="#">Cotiza tu Batería</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php get_template_part('loops/loop', 'bloghome'); ?>
		<?php get_template_part('loops/loop', 'autosup'); ?>	
	</main>    

<?php get_footer(); ?>
