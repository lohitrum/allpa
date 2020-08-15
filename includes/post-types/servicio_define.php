<?php
add_action( 'init', 'create_servicio_type' );
function create_servicio_type() {
	register_post_type( 'mkt_servicio',
		array(
			'labels' => array(
				'name' => __( 'Servicios' ),
				'singular_name' => __( 'Servicio' ),
                'add_new' => 'Nuevo servicio',
                'add_new_item' => 'Nuevo servicio'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'servicio'),
			'exclude_from_search' => false,
			'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', ),
		)
	);
}




// Register Taxonomy seccion
function custom_taxonomy_seccion() {	
	$labels = array(
		'name'                       => 'Sección',
		'singular_name'              => 'Sección',
		'menu_name'                  => 'Secciones',
	);
	
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,		
	);
	register_taxonomy( 'seccionservicio', array( 'mkt_servicio' ), $args );
}
add_action( 'init', 'custom_taxonomy_seccion', 0 );


// Agregar metaboxes
add_action( 'cmb2_init', 'mkt_add_metabox_servicio' );
function mkt_add_metabox_servicio() {

	$prefix = '_mkt_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'servicio',
		'title'        => __( 'Caracteristicas de los servicios', 'cmb2' ),
		'object_types' => array( 'mkt_servicio' ),
		'context'      => 'normal',
		'priority'     => 'default',
	));
	
	// Subtexto   
	$cmb->add_field( array(
		'name' => __( 'Texto Banner Servicio', 'cmb2' ),
		'id' => $prefix . 'subtexto_prod',
		'type' => 'text',
	));
	
}

?>