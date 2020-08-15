<?php get_header(); ?>

	<main role="main" class="blog">
		<!-- section -->
		<section class="single__marcas">
			<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="marcas__general--titulo">
                            <img src="<?php bloginfo("template_url"); ?>/img/home-marca2.png" alt="">
                            <a href="#" target="_blank">Visita Minotti</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                       <div class="row marcas__contenedor row__marcas--single">
                       <?php if (have_posts()): while (have_posts()) : the_post(); ?>
			                <?php get_template_part('loops/loop', 'marcas'); ?>
                        <?php endwhile; ?>                        
                       <?php else: ?>
	                    <article>
		                    <h2><?php _e( 'Sorry, nothing to display.', 'maketabase' ); ?></h2>
	                    </article>
                        <?php endif; ?>
                       </div>
                    </div>              
               </div>
            </div>
        </section>
        <?php get_template_part('loops/loop', 'home'); ?>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
