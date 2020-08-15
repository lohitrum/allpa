			<!-- footer -->
			<footer class="footer" role="contentinfo">
             
    <?php if(!is_page(24)) { ?>
           
    <?php  }  ?>             
               
            <section class="footer__top">
				<div class="container">
					<div class="row">					
						<div class="col-md-8">
							<nav class="menu__footer">
								<ul>
									<li><a href="<?php the_permalink(8); ?>">Nosotros</a></li>
									<li><a href="<?php the_permalink(10); ?>">Baterías Automotrices</a></li>
									<li><a href="<?php the_permalink(12); ?>">Servicios</a></li>
									<li><a href="<?php the_permalink(14); ?>">Empresas</a></li>
									<li><a href="<?php the_permalink(68); ?>">Blog</a></li>
									<li><a href="<?php the_permalink(17); ?>">Contacto</a></li>												
								</ul>
							</nav>							
						</div>
						<div class="col-md-4">
							<div class="footer__back">
								<a id="backto">+ Ir al inicio -</a>
							</div>
						</div>
					</div>											
				</div>
			</section>
			<section class="footer__bottom">
				<div class="container">
					<div class="row">					
						<div class="col-md-12 cols-m-12">
							<div class="footer__texto2">
								<p>Diseño Web realizado por @BLeimarkt  |  Nerida Gallegos   |   <a href="#">Detalles</a></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			</footer>
			<!-- /footer -->

		</div>		
		<!-- /wrapper -->        
		<?php wp_footer(); ?>
		
	</body>
</html>
