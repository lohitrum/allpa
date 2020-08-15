<?php
 /* Template Name: Baterias automotrices */
?>

<?php get_header(); ?>

<main role="main">
    
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

    <?php get_template_part('loops/loop', 'bloghome'); ?>
	<?php get_template_part('loops/loop', 'autosup'); ?>	   
</main>
<?php get_footer(); ?>