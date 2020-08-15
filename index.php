<?php get_header(); ?>
	<main role="main" class="blog">

        <section class="home__blog__wrap">
            <div class="home__blog--gris">
				<div class="container">				
					<?php 
						echo do_shortcode('[blog_ultimo cuantos="1" offset="0"]'); 
					?>				
				</div>
			</div>
		</section>
		
		<section class="home__blog">
			<div class="home__blog--wrap">
				<div class="container">
					<div class="row">
						<?php 
							echo do_shortcode('[blog_ultimospage cuantos="99" offset="1"]'); 
						?>							  
					</div>					
				</div>
			</div>
		</section>

		<?php get_template_part('loops/loop', 'instagram'); ?>        
		<?php get_template_part('loops/loop', 'autosup'); ?>      

	</main>

<?php get_footer(); ?>