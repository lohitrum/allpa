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
										<h2><?php the_title(); ?></h2>										
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
								<div class="row">
									<div class="col-md-12">
										<div class="post__title">										
												<a href="<?php the_permalink(10); ?>">Ver Baterías</a>
												<a href="<?php the_permalink(12); ?>">Servicios Complementarios</a>
										</div>	
									</div>								
								</div>											
								<div class="entry wow fadeIn" data-wow-duration="2.5s">									
									<?php the_content(); // Dynamic Content ?>
									<p class="p__share">
										Por <span><?php echo $autor; ?></span>, <?php echo the_date( ' F Y' ); ?>										 
										<a href="https://www.addtoany.com/share" class="share a2a_dd">Compartir</a>							
									</p>	    
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
						echo do_shortcode('[blog_ultimospage cuantos="1"]'); 
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
	<?php get_template_part('loops/loop', 'instagram'); ?>
    <?php get_template_part('loops/loop', 'autosup'); ?>
		
</main>

<?php get_footer(); ?>
