<?php get_header(); ?>

	<main role="main" class="blog">
        <!-- section -->
        <section class="home__canales__pago home__agencia interna__background">       
        </section>
        <section class="home__blog__titulo">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php single_cat_title(); ?></h2>                        
                    </div>
                </div>
            </div>
        </section>
		<section class="blog__categoria">          
			<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
			                <?php get_template_part('loops/loop', 'blog'); ?>
			                <?php get_template_part('pagination'); ?>
                        <?php endwhile; ?>
                       <?php else: ?>
	                    <article>
		                    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	                    </article>
                        <?php endif; ?>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <?php //get_sidebar(); ?>
                    </div> -->
               </div>
            </div>

		</section>
                        
        <?php get_template_part('loops/loop', 'bloghome'); ?>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
