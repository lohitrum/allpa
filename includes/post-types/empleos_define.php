<?php
add_action( 'init', 'create_empleos_type' );
function create_empleos_type() {
	register_post_type( 'mkt_empleos',
		array(
			'labels' => array(
				'name' => __( 'Empleos' ),
				'singular_name' => __( 'Empleo' ),
                'add_new' => 'Nuevo Empleo',
                'add_new_item' => 'Nuevo Empleo'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'empleos'),
            'exclude_from_search' => false,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
		)
	);
}
// Agregar metaboxes
/*
add_action( 'cmb2_init', 'mkt_add_metabox_empleos' );
function mkt_add_metabox_empleos() {

	$prefix = '_mkt_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'empleo',
		'title'        => __( 'Caracteristicas de los empleos', 'cmb2' ),
		'object_types' => array( 'mkt_empleos' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
    
    // Autor    
    $cmb->add_field( array(
        'name' => __( 'Autor', 'cmb2' ),
        'id' => $prefix . 'autor',
        'type' => 'text',
    ) );
    // Donde
    $cmb->add_field( array(
        'name' => __( 'Donde', 'cmb2' ),
        'id' => $prefix . 'donde',
        'type' => 'text',
    ) );
    
    // Link
    $cmb->add_field( array(
        'name' => __( 'Link', 'cmb2' ),
        'id' => $prefix . 'link',
        'type' => 'text',
    ) );   
}
*/
?>