<?php
/// Separador
function theme_shortcode_separator( $atts ) {
    extract(shortcode_atts(array(  
        "weight" => '1',
        "color" => '#CCCCCC'
    ), $atts)); 
	return '<hr style="border-top:' . $weight . 'px '.$color.' solid" />';
}
add_shortcode( 'separator', 'theme_shortcode_separator' );
///Clearboth
function theme_shortcode_clearboth( $atts ) {
	return '<div class="clearboth"> </div>';
}

add_shortcode( 'clearboth', 'theme_shortcode_clearboth' );


/// POSTS
// Usage: [list_posts cuantos="1" categoria="xyz" post_type="posts"][/list_posts]
function theme_shortcode_posts( $atts ) {
    extract(shortcode_atts(array(  
        "cuantos" => '1',
        "categoria" => 'blog',
        "post_type"=>'posts'
    ), $atts)); 
    GLOBAL $post;
    $args = array(
            'post_type'=>$post_type,
            'category_name' => $categoria,
            'posts_per_page' => $cuantos
        );
        $rpta = '<ul class="listPosts">';
        $pid = get_the_ID();
        $cat = get_the_category($pid);
        $the_query = new WP_Query( $args );
        // The Loop
        while ( $the_query->have_posts() ) :
	       $the_query->the_post();
         $rpta .= '
            <h3>'.$cat.'</h3>
            <li>                
                <h3><a href="'.get_permalink().'">' . get_the_title() . '</a></h3> 
                '.get_the_excerpt().'               
            </li>';
        endwhile;
        $rpta .= "</ul>";
        wp_reset_query();
	return $rpta;
}
add_shortcode( 'list_posts', 'theme_shortcode_posts' );



/// Blockquote
function theme_shortcode_blockquote( $atts, $content = null ) {
    extract(shortcode_atts(array(  
        "bgcolor" => '#fff',
        "color" => '#444',
        'align'=>'none'
    ), $atts)); 
	return '<blockquote class="align'.$align.'" style="color:'.$color.'; background-color:'.$bgcolor.'">'. wpautop( trim( $content ) ).'</blockquote>';
}
add_shortcode( 'blockquote', 'theme_shortcode_blockquote' );

/// Div
function theme_shortcode_div( $atts, $content = null ) {
    extract(shortcode_atts(array(  
        "class" => '',        
        "href" => ''        
    ), $atts)); 
	if($href != "") { 
		return '
		<div class="div '.$class.'">
			'. do_shortcode(trim( $content )).'
			<a class="circulo__link" href="'.$href.'">link</a>
		</div>'; 
	} else {
		return '<div class="'.$class.'">'. do_shortcode(trim( $content )).'</div>';
	}
}
add_shortcode( 'div', 'theme_shortcode_div' );


/// Span
function theme_shortcode_span( $atts, $content = null ) {
    extract(shortcode_atts(array(  
        "class" => ''        
    ), $atts)); 
	return '<span class="'.$class.'">'. trim( $content ).'</span>';
}
add_shortcode( 'span', 'theme_shortcode_span' );


/// Sections
function theme_shortcode_section( $atts, $content = null ) {
    extract(shortcode_atts(array(  
        "class" => '',        
        "id" => ''        
    ), $atts)); 	
	return '<section id="'.$id.'" class="'.$class.'">'. do_shortcode(trim( $content )).'</section>';	
}
add_shortcode( 'section', 'theme_shortcode_section' );

// Shortcodes Slide
function theme_shortcode_slide( $atts ) {
    extract(shortcode_atts(array(  
        "id" => '1',        
    ), $atts)); 
    GLOBAL $post;
    $args = array(
            'post_type'=>'mkt_slider',            
            'posts_per_page' => -1,
			'p' => $id
        );
        $rpta = '<div class="owl-carousel owl-slider">';
        $the_query = new WP_Query( $args );
        // The Loop
        while ( $the_query->have_posts() ) :
	       $the_query->the_post();
		   $id = get_the_ID();
		   $laimagen = get_post_meta($id, '_mkt_slides', true);		   
            
		   foreach ($laimagen as $arr){
			   $imagen = $arr['_mkt_imagen_del_slide'];
			   $titulo = $arr['_mkt_titulo_del_slide'];
               
               		   
				$rpta .= '								
                    <div class="item" style="background-image:url('.$imagen.');">
                        <div class="item__titulo">
                          <h2>'.$titulo.'</h2>
                        </div>
                    </div>
				';
		   }
        endwhile;
        $rpta .= '</div>';
        wp_reset_query();
	return $rpta;
}
add_shortcode( 'slider', 'theme_shortcode_slide' ); 

function theme_shortcode_proyectoshome( $atts ) {
    extract(shortcode_atts(array(
        "num" => '5',        
        "post_type"=>'mkt_proyecto'
    ), $atts));
    GLOBAL $post;
    $args = array('post_type' => 'mkt_proyecto',
                  'posts_per_page' => $num,
                  'order' => 'ASC'           
        );
        $rpta = '
        <div class="row no-gutter">        
		    ';
        $the_query = new WP_Query( $args );
        // The Loop
        while ( $the_query->have_posts() ) :
        $the_query->the_post();
        $post_id = get_the_ID();
        $pid = get_the_ID();
        $thumbID = get_post_thumbnail_id( get_the_ID() );
        $imgDestacada = wp_get_attachment_image_src( $thumbID, 'medium' );
        $thumb = get_the_post_thumbnail_url($pid, "medium");
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );          
        $autor = get_post_meta( $pid, "_mkt_autor", true );  
        $terms = get_the_terms($pid, "seccionproyecto");       
        $term__class = "";
        
        if(!empty($terms)) {
            foreach($terms as $term) {
                $term__class .= 'term--'.$term->slug.' ';
            }
        }

        $rpta .= '      
          <div class="col-md-4 home__categorias--wrap '.$term__class.' activo">
						<div class="home__categorias--item">
							<div class="home__categorias--img">
								<a href="'.get_the_permalink().'" class="categoria__item">               
								<figure><img src="'.$large_image_url[0].'" alt=""></figure>
								</a>
							</div>
							<div class="home__categorias--text">
                <a href="'.get_the_permalink().'" class="home__categorias--title">'.get_the_title().' - 
                ';
                foreach (get_the_terms(get_the_ID(), 'paisproyecto') as $cat) {
                  $rpta .= ''.$cat->name.'<br/>';
                }
                foreach (get_the_terms(get_the_ID(), 'seccionproyecto') as $cat) {
                  $rpta .= '<span>'.$cat->name.'</span> ';
                }
        $rpta .= '</a>                
							</div>
						</div>
					</div>         
        ';        
        endwhile;
        $rpta .= "</div>";

        wp_reset_query();
	return $rpta;
}
add_shortcode( 'home__proyectos', 'theme_shortcode_proyectoshome' );


function theme_shortcode_serviciohome( $atts ) {
    extract(shortcode_atts(array(
        "cuantos" => '3',
        "categoria" => '3',
        "post_type"=>'mkt_servicio'
    ), $atts));
    GLOBAL $post;
      $args = array(
            'post_type' => 'mkt_servicio',
            'order' => 'ASC',
            'posts_per_page' => $cuantos,
            'tax_query' => array(
              array(
                 'taxonomy' => 'seccionservicio',
                 'field'    => 'term_id',
                 'terms'    => $categoria,
              ),
            ),
        );
        $rpta = '<div class="contenedor__servicios"> 
                  <ul>                 
        ';
        $the_query = new WP_Query( $args );
        // The Loop
        while ( $the_query->have_posts() ) :
	       $the_query->the_post();
         //$inicio = get_post_meta(get_the_ID(), 'mkt_re_inicio', true);
         $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
         $rpta .=
         '<li><p class="title__servicio">'.get_the_title().'</p></li>            
          ';
        endwhile;
        $rpta .= "</ul></div>";
        wp_reset_query();
	return $rpta;
}
add_shortcode( 'home__servicios', 'theme_shortcode_serviciohome' );


function theme_shortcode_expeditions( $atts ) {
    extract(shortcode_atts(array(
        "cuantos" => '3',
        "categoria" => '3',
        "post_type"=>'mkt_mueble'
    ), $atts));
    GLOBAL $post;
      $args = array(
            'post_type' => 'mkt_mueble',
            'order' => 'ASC',
            'posts_per_page' => $cuantos,
            'tax_query' => array(
              array(
                 'taxonomy' => 'seccionmueble',
                 'field'    => 'term_id',
                 'terms'    => $categoria,
              ),
            ),
        );
        $rpta = '
        ';
        $the_query = new WP_Query( $args );
        // The Loop
        while ( $the_query->have_posts() ) :
           $the_query->the_post();
         $pid = get_the_ID();
         $duration = get_post_meta(get_the_ID(), '_mkt_duration', true);
         $from = get_post_meta( $pid, "_mkt_from", true );
         $difficulty = get_post_meta( $pid, "_mkt_difficulty", true );
         $order = get_post_meta( $pid, "_mkt_order", true );         
         $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium' );                  
         $rpta .=
         '<div class="col-md-4 col-sm-4">
         <div class="exp__item">
           <div class="exp__img">
             <a href="'.get_the_permalink().'" class="exp__img">               
               <figure><img src="'.$large_image_url[0].'" alt=""></figure>
             </a>             
           </div>
           <div class="exp__inter">
             <a href="'.get_the_permalink().'">'.get_the_title().'</a>
             <p>'.wp_trim_words(get_the_excerpt(), 10).'</p>      
           </div>
            <div class="exp__detalle">                   
                    <div class="detalle">
                        <p>Duration</p>
                        <span>'.$duration.'</span>
                    </div>                
                    <div class="detalle">
                        <p>Starting<br/>From</p>
                        <span>'.$from.'</span>
                    </div>               
                    <div class="detalle">
                        <p>Difficulty</p>
                        <span>'.$difficulty.'</span>
                    </div>               
            </div>
            <div class="exp__button">
                <a href="'.get_the_permalink().'" class="title__exp">View this ';
                ?>
                <?php 
                foreach (get_the_terms(get_the_ID(), 'secciontour') as $cat) {
                  $parent = get_term_by('id', $cat->parent, $cat->taxonomy);
                  $rpta .= ($parent ? $parent->name : '-');                  
                }
                $rpta .='</a>
            </div>
        </div>
         </div>';
        endwhile;
        $rpta .= "";
        wp_reset_query();
	return $rpta;
}
add_shortcode( 'expeditions', 'theme_shortcode_expeditions' );


function theme_shortcode_extension( $atts ) {
  extract(shortcode_atts(array(
      "cuantos" => '4',
      "categoria" => '10',
      "post_type"=>'mkt_mueble'
  ), $atts));
  GLOBAL $post;
    $args = array(
          'post_type' => 'mkt_mueble',
          'order' => 'ASC',
          'posts_per_page' => $cuantos,
          'tax_query' => array(
            array(
               'taxonomy' => 'seccionmueble',
               'field'    => 'term_id',
               'terms'    => $categoria,
            ),
          ),
      );
      $rpta = '
      ';
      $the_query = new WP_Query( $args );

      // The Loop
      while ( $the_query->have_posts() ) :
       $the_query->the_post();
       //$inicio = get_post_meta(get_the_ID(), 'mkt_re_inicio', true);
       $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium' );
       


       $rpta .=
       '<div class="col-md-4 col-sm-4">
          <div class="catalogo__item item__categoria id-'.get_the_ID().' wow fadeInLeft" data-wow-duration="1s">                          
            <div class="catalogo__img">
              <a href="'.get_the_permalink().'" class="catalogo__item">               
                <figure>';
                if ( has_post_thumbnail()) {                     
                  $rpta .=' <img src="'.$large_image_url[0].'" alt="">';                
                } else {                                            
                  $rpta .='<img src="'.get_bloginfo("template_url").'/img/default.png" alt="">';                
                }                  
              $rpta .='</figure>
              </a>
            </div>
            <div class="catalogo__exten">
              <a href="'.get_the_permalink().'" class="title__catalogo title">'.get_the_title().'</a>              
            </div>
          </div>
       </div>';
      endwhile;
      $rpta .= "";
      wp_reset_query();
return $rpta;
}
add_shortcode( 'extensionmuebles', 'theme_shortcode_extension' );

function theme_shortcode_extensionmarcas( $atts ) {
  extract(shortcode_atts(array(
      "cuantos" => '4',
      "categoria" => '10',
      "post_type"=>'mkt_mueble'
  ), $atts));
  GLOBAL $post;
    $args = array(
          'post_type' => 'mkt_mueble',
          'order' => 'ASC',
          'posts_per_page' => $cuantos,
          'tax_query' => array(
            array(
               'taxonomy' => 'marcamueble',
               'field'    => 'term_id',
               'terms'    => $categoria,
            ),
          ),
      );
      $rpta = '
      ';
      $the_query = new WP_Query( $args );

      // The Loop
      while ( $the_query->have_posts() ) :
       $the_query->the_post();
       //$inicio = get_post_meta(get_the_ID(), 'mkt_re_inicio', true);
       $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium' );
       


       $rpta .=
       '<div class="col-md-4 col-sm-4">
          <div class="catalogo__item item__categoria id-'.get_the_ID().' wow fadeInLeft" data-wow-duration="1s">                          
            <div class="catalogo__img">
              <a href="'.get_the_permalink().'" class="catalogo__item">               
                <figure>';
                if ( has_post_thumbnail()) {                     
                  $rpta .=' <img src="'.$large_image_url[0].'" alt="">';                
                } else {                                            
                  $rpta .='<img src="'.get_bloginfo("template_url").'/img/default.png" alt="">';                
                }                  
              $rpta .='</figure>
              </a>
            </div>
            <div class="catalogo__exten">
              <a href="'.get_the_permalink().'" class="title__catalogo title">'.get_the_title().'</a>              
            </div>
          </div>
       </div>';
      endwhile;
      $rpta .= "";
      wp_reset_query();
return $rpta;
}
add_shortcode( 'extensionmarcas', 'theme_shortcode_extensionmarcas' );


/// Menu Sidebar
function theme_shortcode_menusidebar() { 
   
  $rpta .= wp_nav_menu( array(
      'menu'              => 'internas',
      'menu_id'         => 'menu-internas',
      'theme_location'    => 'internas',
      'depth'             => 2,
      'container'         => 'div',                              
      'menu_class'        => 'navbar-internas',
      //'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      //'walker'            => new WP_Bootstrap_Navwalker()
      )
    );  
    return $rpta;
  }
add_shortcode( 'menusidebar', 'theme_shortcode_menusidebar' );

/// Shortcode breadcrumb
function ss_show_breadcrumb() { 
  return bcn_display();  
}
add_shortcode( 'sc__breadcrumb', 'ss_show_breadcrumb' );



function theme_shortcode_agencia( $atts ) {
  extract(shortcode_atts(array(
      "cuantos" => '4',
      "categoria" => '8',
      "post_type"=>'mkt_agencia'
  ), $atts));
  GLOBAL $post;
    $args = array(
          'post_type' => 'mkt_agencia',
          'order' => 'ASC',
          'posts_per_page' => $cuantos,
          'tax_query' => array(
            array(
               'taxonomy' => 'seccionagencia',
               'field'    => 'term_id',
               'terms'    => $categoria,
            ),
          ),
      );
      $rpta = '<div class="row">
      ';
      $the_query = new WP_Query( $args );

      // The Loop
      while ( $the_query->have_posts() ) :
       $the_query->the_post();
       $subtexto = get_post_meta(get_the_ID(), '_mkt_subtexto_agencia', true);
       $direccion = get_post_meta(get_the_ID(), '_mkt_direccion_agencia', true);
       $tel = get_post_meta(get_the_ID(), '_mkt_tel_agencia', true);          
       $rpta .=
       '<div class="col-md-6">
          <div class="home__sede--contenido id-'.get_the_ID().'">
              <h2>'.get_the_title().'</h2>
              <h3>'.$subtexto.'</h3>
              <p>
              <span class="address">'.$direccion.'</span><br/><br/>
              <span class="cel">';
              if( $tel!= ""){
                $rpta .= $tel;
              }
              else{
                $rpta .= '<span class="apertura">Proxima apertura</span>';
              }

              $rpta .='</span>
              </p>
          </div>
        </div>';
      endwhile;
      $rpta .= "</div>";
      wp_reset_query();
return $rpta;
}
add_shortcode( 'lista_agencias', 'theme_shortcode_agencia' );







//Blog
function function_blog_ultimo( $atts ) {
  extract(shortcode_atts(array(
      "cuantos" => '4',
      'offset' => '0',
      //"categoria" => 'blog',
      "post_type"=>'post'
  ), $atts));

  GLOBAL $post;
  $args = array(
          'post_type' => 'post',          
          'posts_per_page' => $cuantos,
          'offset' => $offset, 
          'order' => 'DESC'
      );
      $rpta = '<div class="row">';
      $the_query = new WP_Query( $args );
      // The Loop
      $count = 1;
      while ( $the_query->have_posts() ) :
       $the_query->the_post();
       $post_id = get_the_ID();
       $pid = get_the_ID();
       $autor = get_post_meta(get_the_ID(), '_mkt_autor_blog', true);
       $thumbID = get_post_thumbnail_id( get_the_ID() );
       $imgDestacada = wp_get_attachment_image_src( $thumbID, 'full' );
       $hashtag = get_post_meta(get_the_ID(), '_mkt_hashtag', true);
       $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'largeblog' );
       $rpta .='
       <div class="col-md-12">
         <div class="blog__featured '.get_the_category(get_the_ID())[0]->slug.'">          
           <div class="row">
            <div class="col-md-12">
              <div class="blog__featured--img">
                <a href="'.get_the_permalink().'">
                  <figure><img src="'.$large_image_url[0].'" alt=""></figure>
                </a>
              </div>
              <div class="blog__featured--wrap">
                  <div class="blog__featured--texto-contenido">
                    <div class="blog__featured--texto">              
                      <h2><a class="blog__featured--titulo" href="'.get_the_permalink().'">'.get_the_title().'</a></h2>
                      <p>'.wp_trim_words(get_the_excerpt(), 55).' </p>   
                      <a class="ver__mas" href="'.get_the_permalink().'">Ver artículo completo</a>
                    </div>
                  </div>                  
               </div>
            </div>                                 
           </div>
         </div>
       </div>
       '; 
      $count++;
      endwhile;
      $rpta .= "</div>";
      wp_reset_query();

return $rpta;
}
add_shortcode( 'blog_ultimo', 'function_blog_ultimo' );

function function_blog_ultimos( $atts ) {
  extract(shortcode_atts(array(
      "cuantos" => '4',
      //"categoria" => 'blog',
      "post_type"=>'post'
  ), $atts));

  GLOBAL $post;
  $args = array(
          'post_type' => 'post',          
          'posts_per_page' => $cuantos,
          'order' => 'ASC'
      );
      $rpta = '<div class="row no-gutter">';
      $the_query = new WP_Query( $args );
      // The Loop
      $count = 1;
      while ( $the_query->have_posts() ) :
       $the_query->the_post();
       $post_id = get_the_ID();
       $pid = get_the_ID();
       $thumbID = get_post_thumbnail_id( get_the_ID() );
       $imgDestacada = wp_get_attachment_image_src( $thumbID, 'medium' );
       $hashtag = get_post_meta(get_the_ID(), '_mkt_hashtag', true);
       $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium' );
       //$textoCorto=limitar_palabras(get_the_excerpt(), 25,'...&nbsp;&nbsp;');
       if($count == 1){
        $rpta .='
        <div class="col-md-6">       
          <div class="blog__ultimo '.get_the_category(get_the_ID())[0]->slug.'">          
            <div class="blog__ultimo--img">
              <a href="'.get_the_permalink().'">
                <figure><img src="'.$large_image_url[0].'" alt=""></figure>
              </a>
            </div>
            <div class="blog__ultimo--texto">
              <h2><a class="blog__ultimo--titulo" href="'.get_the_permalink().'">'.get_the_title().'</a></h2>            
            </div>';            
            if(get_the_category(get_the_ID())[0]->name != ""){
              $rpta .='<div class="blog__hashtag">
                <h2>'.get_the_category(get_the_ID())[0]->name.'</h2>
              </div>';
            }
            else{
              $rpta .= '<div class="blog__hashtag">                
              </div>';
            }          
            $rpta .= '          
          </div>
        </div>
        ';
       }
       else{
        $rpta ='          
              <div class="col-md-6">
                <div class="blog__otros '.get_the_category(get_the_ID())[0]->slug.'">          
                  <div class="blog__otros--img">
                    <a href="'.get_the_permalink().'">
                      <figure><img src="'.$large_image_url[0].'" alt=""></figure>
                    </a>
                  </div>
                  <div class="blog__otros--texto">
                    <h2><a class="blog__ultimo--titulo" href="'.get_the_permalink().'">'.get_the_title().'</a></h2>            
                  </div>';            
                  if(get_the_category(get_the_ID())[0]->name != ""){
                    $rpta .='<div class="blog__hashtag">
                      <h2>'.get_the_category(get_the_ID())[0]->name.'</h2>
                    </div>';
                  }
                  else{
                    $rpta .= '<div class="blog__hashtag">                
                    </div>';
                  }          
                  $rpta .= '          
                </div>
              </div>           
        ';
       }       
      $count++;
      endwhile;
      $rpta .= "</div>";
      wp_reset_query();

return $rpta;
}
add_shortcode( 'blog_ultimos', 'function_blog_ultimos' );


//Blog
function function_blog_ultimospage( $atts ) {
  extract(shortcode_atts(array(
      "cuantos" => '5',
      'offset' => '0',
      //"categoria" => 'blog',
      "post_type"=>'post'
  ), $atts));

  GLOBAL $post;
  $args = array(
          'post_type' => 'post',          
          'posts_per_page' => $cuantos,
          'offset' => $offset, 
          'post_status' => 'publish',          
          'order' => 'DESC'
          
      );            
      $the_query = new WP_Query( $args );
      // The Loop
      
      while ( $the_query->have_posts() ) :
       $the_query->the_post();
       $post_id = get_the_ID();
       $pid = get_the_ID();
       $thumbID = get_post_thumbnail_id( get_the_ID() );
       $imgDestacada = wp_get_attachment_image_src( $thumbID, 'medium' );
       $autor = get_post_meta(get_the_ID(), '_mkt_autor_blog', true);
       $time = get_post_meta(get_the_ID(), '_mkt_time_read', true);
       $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium' );
       //$textoCorto=limitar_palabras(get_the_excerpt(), 25,'...&nbsp;&nbsp;');       
        $rpta .='
        <div class="col-md-6">       
          <div class="blog__ultimo '.get_the_category(get_the_ID())[0]->slug.'">          
            <div class="row">              
              <div class="col-md-12">
                <div class="blog__ultimo--img">
                  <a href="'.get_the_permalink().'">
                    <figure><img src="'.$large_image_url[0].'" alt=""></figure>
                  </a>              
                </div>
                <div class="blog__ultimo--texto-contenido">
                  <div class="blog__ultimo--texto">              
                    <h2><a class="blog__ultimo--titulo" href="'.get_the_permalink().'">'.get_the_title().'</a></h2>                  
                  </div>
                </div>
              </div>                               
            </div>
          </div>
        </div>
        ';             
      endwhile;      
      wp_reset_query();

return $rpta;
}
add_shortcode( 'blog_ultimospage', 'function_blog_ultimospage' );



//Blog
function function_blog_ultimospagesingle( $atts ) {
  extract(shortcode_atts(array(
      "cuantos" => '5',
      //"categoria" => 'blog',
      "post_type"=>'post'
  ), $atts));

  GLOBAL $post;
  $args = array(
          'post_type' => 'post',          
          'posts_per_page' => $cuantos,
          'offset' => 0,      
          'post_status' => 'publish',          
          'order' => 'ASC'
          
      );            
      $the_query = new WP_Query( $args );
      // The Loop
      
      while ( $the_query->have_posts() ) :
       $the_query->the_post();
       $post_id = get_the_ID();
       $pid = get_the_ID();
       $thumbID = get_post_thumbnail_id( get_the_ID() );
       $imgDestacada = wp_get_attachment_image_src( $thumbID, 'medium' );
       $autor = get_post_meta(get_the_ID(), '_mkt_autor_blog', true);
       $time = get_post_meta(get_the_ID(), '_mkt_time_read', true);
       $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium' );
       //$textoCorto=limitar_palabras(get_the_excerpt(), 25,'...&nbsp;&nbsp;');       
        $rpta .='
        <div class="col-md-3">       
          <div class="blog__primero '.get_the_category(get_the_ID())[0]->slug.' '.$clase.'">          
            <div class="blog__primero--img">
              <a href="'.get_the_permalink().'">
                <figure><img src="'.$large_image_url[0].'" alt=""></figure>
              </a>               
            </div>
            
            <div class="blog__primero--texto">
              ';            
                if(get_the_category(get_the_ID())[0]->name != ""){
                  $rpta .='<div class="blog__hashtag">
                    <h2>#'.get_the_category(get_the_ID())[0]->name.'</h2>
                  </div>';
                }
                else{
                  $rpta .= '<div class="blog__hashtag">                
                  </div>';
                }          
                $rpta .= '
              <h2><a class="blog__primero--titulo" href="'.get_the_permalink().'">'.get_the_title().'</a></h2>                        
            </div>
            <div class="blog__ultimo--autor">
              <p>Por '.$autor.'</p>              
            </div>           
          </div>
        </div>
        ';             
      endwhile;      
      wp_reset_query();

return $rpta;
}
add_shortcode( 'blog_ultimospagesingle', 'function_blog_ultimospagesingle' );

//Blog
function function_blog_primerospage( $atts ) {
  extract(shortcode_atts(array(
      "cuantos" => '4',
      //"categoria" => 'blog',
      'offset' => '1',
      "post_type"=>'post'
  ), $atts));

  GLOBAL $post;
  $args = array(
          'post_type' => 'post',          
          'posts_per_page' => $cuantos,
          'offset' => $offset,      
          'post_status' => 'publish',          
          'order' => 'ASC'
          
      );            
      $the_query = new WP_Query( $args );
      // The Loop
      $rpta = '<div class="col-md-6">';
      while ( $the_query->have_posts() ) :
       $the_query->the_post();
       $post_id = get_the_ID();
       $pid = get_the_ID();
       $thumbID = get_post_thumbnail_id( get_the_ID() );
       $imgDestacada = wp_get_attachment_image_src( $thumbID, 'medium' );
       $autor = get_post_meta(get_the_ID(), '_mkt_autor_blog', true);
       $time = get_post_meta(get_the_ID(), '_mkt_time_read', true);
       $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium' );
       if ($large_image_url[0] == "") {
         $clase = "img__padding";
       }
       else{
         $clase = "";
       }
       //$textoCorto=limitar_palabras(get_the_excerpt(), 25,'...&nbsp;&nbsp;');       
        $rpta .='
              
          <div class="blog__primero '.get_the_category(get_the_ID())[0]->slug.' '.$clase.'">          
            <div class="blog__primero--img">
              <a href="'.get_the_permalink().'">
                <figure><img src="'.$large_image_url[0].'" alt=""></figure>
              </a>               
            </div>
            
            <div class="blog__primero--texto">
              ';            
                if(get_the_category(get_the_ID())[0]->name != ""){
                  $rpta .='<div class="blog__hashtag">
                    <h2>#'.get_the_category(get_the_ID())[0]->name.'</h2>
                  </div>';
                }
                else{
                  $rpta .= '<div class="blog__hashtag">                
                  </div>';
                }          
                $rpta .= '
              <h2><a class="blog__primero--titulo" href="'.get_the_permalink().'">'.get_the_title().'</a></h2>                        
            </div>
            <div class="blog__ultimo--autor">
              <p>Por '.$autor.'</p>              
            </div>           
          </div>
        
        ';             
      endwhile;      
      wp_reset_query();
      $rpta .= "</div>";
return $rpta;
}
add_shortcode( 'blog_primerospage', 'function_blog_primerospage' );

?>