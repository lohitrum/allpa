			<!-- footer -->
			<footer class="footer" role="contentinfo">
             <a name="contacto"></a>
    <?php if(!is_page(24)) { ?>
           
    <?php  }  ?>             
               
            <section class="footer__top">
				<div class="container">
					<div class="row">					
						<div class="col-md-6 align-self-center">
							<div class="footer__top-contenido">
								<div class="footer__top--item">
									<p class="ubi">Av. Jhon Kennedy 1402 Paucarpata Arequipa
									Urb. Guardia Civil P-5 III Etapa Paucarpata – Arequipa</p>
								</div>
								<div class="footer__top--item">
									<p class="mail">Email:<br/>
									<a href="mailto:consultoria@ateneaconsultoressac.com">consultoria@ateneaconsultoressac.com</a></p>
								</div>
								<div class="footer__top--item">
									<p class="tel">Teléfono<br/>
									(054) 324 338</p>
								</div>
							</div>
						</div>						
						<div class="col-md-6">
							<div class="footer__contacto">
								<h2>Contáctanos</h2>
								<div class="formulario__contacto">
									<?php echo do_shortcode('[contact-form-7 id="29" title="Formulario de contacto 1"]'); ?>
								</div>
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
								<p>Atenea Consultores Todos los derechos reservados 2020</p>
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
