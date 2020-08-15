<?php
add_action( 'init', 'create_slider_type' );
function create_slider_type() {
	register_post_type( 'mkt_slider',
		array(
			'labels' => array(
				'name' => __( 'Sliders' ),
				'singular_name' => __( 'Slider' ),
                'add_new' => 'New Slider',
                'add_new_item' => 'New Slider'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'slider'),
            'exclude_from_search' => true,
            'supports' => array(`title`, 'page-attributes' ) 
		)
	);
}


// Agregar metaboxes
add_action( 'cmb2_init', 'mkt_add_metabox_slide' );
function mkt_add_metabox_slide() {

	$prefix = '_mkt_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'slides',
		'title'        => __( 'Slides', 'cmb2' ),
		'object_types' => array( 'mkt_slider' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$slides = $cmb->add_field( array(
			'name' => __( 'Slides', 'cmb2' ),
			'id' => $prefix . 'slides',
			'type' => 'group',
			'options' => array(
                'add_button'        => 'Agregar slide',
                'sortable'          => true,
            ),
	) );

		$cmb->add_group_field( $slides, array(
			'name' => __( 'Titulo del slide', 'cmb2' ),
			'id' => $prefix . 'titulo_del_slide',
			'type' => 'text',
		) );

		$cmb->add_group_field( $slides, array(
			'name' => __( 'Imagen del slide', 'cmb2' ),
			'id' => $prefix . 'imagen_del_slide',
			'type' => 'file',
		) );

}


// Agregar columnas
add_filter( 'manage_edit-mkt_slider_columns', 'columnas_post_type_mkt_slider' ) ;

function columnas_post_type_mkt_slider( $columnas ) {
    $columnas = array(        
        'cb' => '<input type="checkbox" />',
        'title' => 'Nombre',
        //'tipo' => 'Tipo',
        'shortcode' => 'Shortcode'        
    );
    return $columnas;
}


add_action( 'manage_mkt_slider_posts_custom_column', 'filas_post_type_mkt_slider', 10, 2 );
function filas_post_type_mkt_slider( $columna, $post_id ) {
    global $post;

    switch( $columna ) {
        case 'shortcode':
            echo '[slider id="'.$post_id.'"]';
            break;  
        /*
        case 'tipo':
            $tipo = get_post_meta( $post_id, "mkt_tipo", true );
            $imagen = get_post_meta( $post_id, "mkt_re_img", true );
            if(!empty($imagen)) { $imgurl = $imagen["url"]; } else { $imgurl=""; }

            if($tipo == 0) { $mitipo = "Desactivado"; } else 
            if($tipo == 1) {  $mitipo = '<img style="width:100px;" src="'.$imgurl.'" />';  } else 
            if($tipo == 2) { $mitipo = "Codigo"; }
            echo $mitipo;
            break;       
        */
        default :
            break;
    }
}
?>