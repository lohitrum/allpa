<?php 
$pid = get_the_ID();
$categories = wp_get_post_categories($pid);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        <div class="col-md-3">
           <div class="empleo__img">
                <?php echo get_the_post_thumbnail($pid, "full", array('class' => 'responsive')); ?>
            </div>
        </div><!-- col -->
        
        <div class="col-md-9">
          <div class="row">
              <div class="col-md-9">
                   <h3 class="empleo__title"><?php the_title(); ?></h3>
                </div>
                <div class="col-md-3 align-self-center">
                    <div class="empleo__fecha">Publicado el <?php the_date("d/m/Y"); ?></div>
                </div>
            </div>
            <?php the_excerpt(); ?>
            <div class="empleo__botones">
               <a href="<?php the_permalink(); ?>" class="btn btn-postular">Postular</a>
                <a href="<?php the_permalink(); ?>" class="btn">Más Información</a>                
            </div>
        </div><!-- col -->
    </div><!-- row -->
</article>