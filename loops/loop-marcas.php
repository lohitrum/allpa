
<div class="col-md-4 col-sm-4">
          <div class="catalogo__item item__categoria">                          
            <div class="catalogo__img">              
              <?php if ( has_post_thumbnail()) { ?>
                <a href="<?php the_permalink(); ?>" class="catalogo__item" title="<?php the_title(); ?>">
                    <figure><?php the_post_thumbnail("medium");?></figure>
                </a>
            <?php } else { ?>
                <a href="<?php the_permalink(); ?>" class="catalogo__item" title="<?php the_title(); ?>">
                    <figure><img src="<?php bloginfo("template_url"); ?>/img/default.png" alt=""></figure>
                </a>
            <?php } ?>
            </div>
            <div class="catalogo__exten">
              <a href="<?php the_permalink(); ?>" class="title__catalogo title"><?php the_title(); ?></a>              
            </div>
          </div>
       </div>