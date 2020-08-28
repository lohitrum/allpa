<?php get_header(); ?>



<main role="main">	

	<section class="single__wrap">

    	<div class="container">

			<div class="row">

				<div class="col-md-12">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php

					$pid = get_the_ID();

					// $categories = get_the_category();

					// $category_id = $categories[0]->cat_ID;

					// $cat = get_the_terms(get_the_ID(), 'secciontour');

					// $contador=0;    

					$thumb = get_the_post_thumbnail_url($pid, "full");    

					$hashtag = get_post_meta(get_the_ID(), '_mkt_hashtag', true);   

					$tiempo = get_post_meta(get_the_ID(), '_mkt_time_read', true);      

					$image = get_post_meta($id, '_mkt_img_blog', true);

					$autor = get_post_meta(get_the_ID(), '_mkt_autor_blog', true);

				?>

				<div class="row">

					<div class="col-md-12">					

						<!-- post thumbnail -->

							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>

								<div class="post__thumb wow fadeInLeft">																	

										<?php the_post_thumbnail('largeblog'); // Fullsize image for the single post ?>

																				

								</div>

							<?php endif; ?>

					</div>

				</div>

					<div class="row">						

						<div class="col-md">

							<div class="row">

								<div class="col-md-1">

									

								</div><!-- col -->															

							</div>

						</div>

						<div class="col-md-11">												

							<!-- article -->								

							<div class="post__contenido">																	
								
								<div class="entry wow fadeIn" data-wow-duration="2.5s">									
									<h2><?php the_title(); ?></h2>

									<?php the_content(); // Dynamic Content ?>										    

								</div>

							</div>

									

						</div>

						<div class="col-md">

							<div class="row">

								<div class="col-md-1">

									

								</div><!-- col -->															

							</div>

						</div>						

					</div>				

					<?php //comments_template(); ?>

					<?php endwhile; ?>

						<?php else: ?>

						<!-- article -->

						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'maketabase' ); ?></h2>

						</article>

						<!-- /article -->

						<?php endif; ?>

					</article><!-- /article -->			

				</div>		

				

			</div>

		</div>

	</section>

	<!-- /section -->





	<section class="home__blog">         

		<div class="home__blog--wrap">

			<div class="container">

				<div class="row">

					<?php 

						echo do_shortcode('[blog_ultimospage cuantos="2"]'); 

					?>							  

				</div>					

			</div>

		</div>

	</section> 

		

</main>



<?php get_footer(); ?>

