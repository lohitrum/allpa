<?php 
$pid = get_the_ID();
$autor = get_post_meta(get_the_ID(), '_mkt_autor_blog', true);
$categories = wp_get_post_categories($pid);
if($nro == 1) {   ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
       <div class="row">
           <div class="col-md-5">
               <?php
               foreach($categories as $c){
                    $cat = get_category( $c );
                    //$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
                   echo '<a href="'.get_bloginfo("wpurl").'/category/'.$cat->slug.'" class="post__category">'.$cat->name.'</a>';
                }
               ?>
                <h2 class="post__title"><?php the_title(); ?></h2>
                <a href="<?php the_permalink(); ?>" class="post__link">Leer artículo completo</a>
            </div><!-- col -->
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <?php echo get_the_post_thumbnail($pid, "full", array('class' => 'responsive')); ?>
           </div><!-- col -->
        </div>
    </article>
<?php } else if($nro == 2 || $nro == 3) { ?>
    <div class="col-md-6">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php echo get_the_post_thumbnail($pid, "full", array('class' => 'responsive')); ?>
            <?php
               foreach($categories as $c){
                    $cat = get_category( $c );
                    //$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
                   echo '<a href="'.get_bloginfo("wpurl").'/category/'.$cat->slug.'" class="post__category">'.$cat->name.'</a>';
                }
               ?>
            <h3>
               <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
        </article>
    </div><!-- col -->
<?php } else { ?>

    <div class="col-md-3">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  
          <div class="blog__primero">                      
            <div class="blog__primero--img">
                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <figure><?php the_post_thumbnail("medium"); // Declare pixel size you need inside the array ?></figure>                        
                    </a>
                <?php endif; ?>
            </div><!-- /post thumbnail -->            
            <div class="blog__primero--texto">
                <?php
                    foreach($categories as $c){
                        $cat = get_category( $c );
                        //$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
                        if($cat->name !=""){
                            echo '<div class="blog__hashtag">
                                    <h2>#'.$cat->name.'</h2>
                                  </div>';
                        }
                        else{
                            echo '<div class="blog__hashtag">                            
                                </div>';
                        }                   
                    }
                ?>              
              <h2><a class="blog__primero--titulo" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>                        
            </div>
            <div class="blog__ultimo--autor">
              <p>Por <?php echo $autor; ?></p>              
            </div>           
          </div>
        </article>
    </div>


<?php } ?>