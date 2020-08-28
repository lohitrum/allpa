<?php
 /* Template Name: Contacto */
?>

<?php get_header(); ?>

<main role="main">
<?php get_template_part('loops/loop', 'contactohome'); ?>

    <section class="page__contacto">
        <div class="container">
            <div class="page__contacto--wrap">                
                <div class="row">
                    <div class="col-md-6">
                        <h3>Si deseas, nos podemos poner en contacto contigo</h3>
                        <div class="form__show">                            
                            <?php echo do_shortcode('[contact-form-7 id="67" title="Formulario contacto"]'); ?>
                        </div><!--Form Show-->
                        <div class="form__hide">
                            <div class="form__respuesta">
                                <img src="<?php bloginfo("template_url"); ?>/img/icons/image-respuesta.svg">                                
                                <p>Muchas Gracias!<br/><br/>
                                    Tus datos se enviarón con 
                                éxito. En las próximas 24 horas nos 
                                comunicaremos contigo</p>                                
                            </div>
                        </div><!--Form Hide-->                        
                    </div>
                    <div class="col-md-6 align-self-center align-center">
                        <img src="<?php bloginfo("template_url"); ?>/img/img-contacto.png">
                    </div>
                </div>
            </div>
        </div>
    </section><!--page__contacto-->

<?php get_template_part('loops/loop', 'instagram'); ?>
<?php get_template_part('loops/loop', 'autosup'); ?>

</main>
<?php get_footer(); ?>