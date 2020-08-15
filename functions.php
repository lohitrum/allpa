<?php
define( "THEME_DIR", get_template_directory() );
define( "THEME_DIR_URL", get_template_directory_uri() );
define( "THEME_NAME", 'Plantilla base' );
define( "THEME_SLUG", 'mibase' );
define( "THEME_STYLES", THEME_DIR_URL . "/css" );
define( "THEME_FRAMEWORK", THEME_DIR . "/framework" );


if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');
    register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'maketabase' ),
        'mobile' => __( 'Mobile Navigation', 'maketabase' ),
        'baterias' => __( 'Baterias Navigation', 'maketabase' ),
        'marcas' => __( 'Marcas Navigation', 'maketabase' ),
        'internas' => __( 'Internas Navigation', 'maketabase' )
	) );

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('largeblog', 1250, 560 , true); // Large Thumbnail
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 450, 450, true); // Medium Thumbnail
    add_image_size('small', 150, '', true); // Small Thumbnail    

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('maketabase', get_template_directory() . '/languages');
}

// Incluir hoja de estilos
function mytheme_enqueue_style() {
    wp_enqueue_style( 'font', get_bloginfo("template_url").'/fonts/styles.css' ); 
    wp_enqueue_style( 'fancybox', get_bloginfo("template_url").'/css/jquery.fancybox.min.css' ); 
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css');
    wp_enqueue_style( 'mytheme-style', get_bloginfo("template_url").'/css/theme.css' ); 
    wp_enqueue_style( 'owl-style', get_bloginfo("template_url").'/css/owl.carousel.min.css' ); 
    wp_enqueue_style( 'owltheme-style', get_bloginfo("template_url").'/css/owl.theme.default.min.css' ); 
    wp_enqueue_style( 'magnific-popup', get_bloginfo("template_url").'/css/magnific-popup.css' );
    wp_enqueue_style( 'animate', get_bloginfo("template_url").'/css/animate.css' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );


// Load javascript
function mytheme_enqueue_scripts() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("https://code.jquery.com/jquery-3.3.1.min.js"), false, '3.3.1');
    wp_enqueue_script('jquery');
    
    //wp_register_script('bootstrap', ("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"), false, '4.0.0');
    wp_register_script('bootstrap', (get_template_directory_uri()."/js/bootstrap.js"), false, '4.0.0');
    wp_enqueue_script('bootstrap');
    

    /* wp_register_script('fancybox', get_template_directory_uri()."/js/jquery.fancybox.min.js", false, '4.0.0');
    wp_enqueue_script('fancybox'); */
    

     wp_register_script(
         'themejs', 
         get_template_directory_uri()."/js/theme.js",
         array ('jquery', 'bootstrap'), 
         false, false);
    wp_enqueue_script('themejs');
    
    wp_register_script(
         'customjs', 
         get_template_directory_uri()."/js/custom.js",
         array ('jquery', 'bootstrap'), 
         false, false);
    wp_enqueue_script('customjs');
    wp_register_script(
        'owlcarouseljs', 
        get_template_directory_uri()."/js/owl.carousel.min.js",
        array ('jquery', 'bootstrap'), 
        false, false);
    wp_enqueue_script('owlcarouseljs');
    wp_register_script(
        'magnificgpoppup', 
        get_template_directory_uri()."/js/jquery.magnific-popup.js",
        array ('jquery', 'bootstrap'), 
        false, false);
    wp_enqueue_script('magnificgpoppup');
    wp_register_script(
        'magnificgpoppupmin', 
        get_template_directory_uri()."/js/jquery.magnific-popup.min.js",
        array ('jquery', 'bootstrap'), 
        false, false);
    wp_enqueue_script('magnificgpoppupmin');
    wp_register_script(
        'wowminjs', 
        get_template_directory_uri()."/js/wow.min.js",
        array ('jquery', 'bootstrap'), 
        false, false);
    wp_enqueue_script('wowminjs');
    wp_register_script(
        'nicescroll', 
        get_template_directory_uri()."/js/jquery.nicescroll.min.js",
        array ('jquery', 'bootstrap'), 
        false, false);
    wp_enqueue_script('nicescroll');
    
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


// Crear Sidebar
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => __('Sidebar Widgets','maketabase' ),
        'id'   => 'sidebar-widgets',
        'description'   => __( 'These are widgets for the sidebar.','maketabase' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ));
}



// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function maketabase_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Disable emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Clean up the <head>
function removeHeadLinks() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

// Move javascript to the bottom
function remove_head_scripts() { 
   remove_action('wp_head', 'wp_print_scripts'); 
   remove_action('wp_head', 'wp_print_head_scripts', 9); 
   remove_action('wp_head', 'wp_enqueue_scripts', 1);
 
   add_action('wp_footer', 'wp_print_scripts', 5);
   add_action('wp_footer', 'wp_enqueue_scripts', 5);
   add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 
//add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );


// Gallery shortcode to modify for link="none". 
function modified_gallery_shortcode($attr) {
    global $post, $wp_locale;
    $output = gallery_shortcode($attr);
   // remove link
   if($attr['link'] == "none") {
     $output = preg_replace(array('/<a[^>]*>/', '/<\/a>/'), '', $output);
   }
return $output;
}
add_shortcode( 'gallery', 'modified_gallery_shortcode' );


// Search form
function mkt_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="search" action="' . home_url( '/' ) . '" >
    <div>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" class="search-input" placeholder="'.__("Looking for...", "maketabase").'" />
    <button class="search-submit" type="submit" id="searchsubmit"><i class="fas fa-search"></i></button>
    </div>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'mkt_my_search_form' );



function be_load_more_js() {
	global $wp_query;
	$args = array(
		'url'   => admin_url( 'admin-ajax.php' ),
		'query' => $wp_query->query,
	);
			
	wp_enqueue_script( 'be-load-more', get_stylesheet_directory_uri() . '/js/load-more.js', array( 'jquery' ), '1.0', true );
	wp_localize_script( 'be-load-more', 'beloadmore', $args );
	
}
add_action( 'wp_enqueue_scripts', 'be_load_more_js' );

/**
 * AJAX Load More
 * @link http://www.billerickson.net/infinite-scroll-in-wordpress
 */
function be_ajax_load_more() {
	$args = isset( $_POST['query'] ) ? array_map( 'esc_attr', $_POST['query'] ) : array();
    /*
	$args['post_type'] = isset( $args['post_type'] ) ? esc_attr( $args['post_type'] ) : 'post';
	$args['paged'] = esc_attr( $_POST['page'] );
	$args['post_status'] = 'publish';
    */
    $curpage = esc_attr( $_POST['page'] );
    
    if(isset($args['seccionproducto'])) {
        $args = array(
            'post_type' => 'mkt_producto',
            'posts_per_page' => 9,
            //'offset' => 9 * $curpage,
            'paged' => $curpage,
            'tax_query' => array(
                array(
			     'taxonomy' => 'seccionproducto',
			     'field'    => 'slug',
			     'terms'    => $args['seccionproducto'],
		      ),
            ),
        );
    } else {
        $args = array(
            'post_type' => 'mkt_producto',                                    
            'orderby' => 'rand',
            'posts_per_page' => 9,
            'offset' => 9 * $curpage,
            'paged' => $curpage
        );
    }
    
    
    //print_r($args);
	//ob_start();
    $data = array();
	$loop = new WP_Query( $args );
	if( $loop->have_posts() ): while( $loop->have_posts() ): $loop->the_post();
		//be_post_summary();
        $pid = get_the_ID();
        $thumb = get_the_post_thumbnail_url($pid, "medium");
        $colores = get_post_meta( $pid, "_mkt_colores", true );
        $subtitulo = get_post_meta( $pid, "_mkt_subtitulo", true );
    
                
        // Colores
        $colores__items = '';
        if(!empty($colores)) {
            $n = 0;
            foreach($colores as $color) {
                if($n==0) { $clase="activo"; } else { $clase=""; }
                    $colores__items .= '
                    <div class="item '.$clase.'">
                        <a class="item__color__link" data-id="'.$pid.'" data-imagen="'.$color["_mkt_imagen_color"].'" href="#">
                            <img alt="'.$color["_mkt_nombre_color"].'" src="'.$color["_mkt_miniatura_color"].'" />
                        </a>
                    </div>';
                $n++;
            }
        }
    
    
        $data[] = array(
            'id' => $pid,
            'titulo' => get_the_title(),
            'subtitulo' => $subtitulo,
            'thumb' => $thumb,
            'colores' => $colores__items,
            'permalink' => get_the_permalink(),
        );
	endwhile; endif; 
    //wp_reset_postdata();
	//$data = ob_get_clean();
    //print_r($data);
	wp_send_json_success( $data );
    //echo json_encode($data);
	wp_die();
}
add_action( 'wp_ajax_be_ajax_load_more', 'be_ajax_load_more' );
add_action( 'wp_ajax_nopriv_be_ajax_load_more', 'be_ajax_load_more' );


function ver_categoria($cat_id) {
    $query = new WP_Query( array( 'cat' => $cat_id, 'posts_per_page' => 3));
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            get_template_part('loops/loop', 'blog');
        }
    } else {
        echo '<div class="col-md-12 pr-md-2"><p>No se encontraron posts</p></div>';
    }    
}



//add extra fields to category edit form hook
add_action ( 'edit_category_form_fields', 'extra_category_fields');
//add extra fields to category edit form callback function
function extra_category_fields( $tag ) {    //check for existing featured ID
    $t_id = $tag->term_id;
    $cat_meta = get_option( "category_$t_id");
?>

<tr class="form-field">
<th scope="row" valign="top"><label for="extra1"><?php _e('extra field'); ?></label></th>
<td>
<input type="text" name="Cat_meta[extra1]" id="Cat_meta[extra1]" size="25" style="width:60%;" value="<?php echo $cat_meta['extra1'] ? $cat_meta['extra1'] : ''; ?>"><br />
            <span class="description"><?php _e('extra field'); ?></span>
        </td>
</tr>

<?php
}

add_action ( 'edited_category', 'save_extra_category_fileds');
   // save extra category extra fields callback function
function save_extra_category_fileds( $term_id ) {
    if ( isset( $_POST['Cat_meta'] ) ) {
        $t_id = $term_id;
        $cat_meta = get_option( "category_$t_id");
        $cat_keys = array_keys($_POST['Cat_meta']);
            foreach ($cat_keys as $key){
            if (isset($_POST['Cat_meta'][$key])){
                $cat_meta[$key] = $_POST['Cat_meta'][$key];
            }
        }
        //save the option array
        update_option( "category_$t_id", $cat_meta );
    }
}

require_once get_template_directory() . '/includes/wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/cmb2/init.php';
require_once get_template_directory() . '/includes/widgets/recentpost.php';
require_once get_template_directory() . '/includes/post-types/slider_define.php';
require_once get_template_directory() . '/includes/post-types/blog_define.php';
require_once get_template_directory() . '/includes/post-types/bateria_define.php';
require_once get_template_directory() . '/includes/shortcodes.php';
require_once get_template_directory() . '/includes/admin/customizer.php';
?>