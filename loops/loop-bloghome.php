<section class="home__blog">         
	<div class="home__blog--wrap">
		<div class="container">
			<div class="row">
				<?php 
					echo do_shortcode('[blog_ultimospage cuantos="3"]'); 
				?>							  
			</div>	
			<div class="row">
				<div class="col-md-3 align-self-center">
					<div class="home__blog--btn">
						<a href="<?php the_permalink(68); ?>">Cargar más Artículos de Interés</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

		