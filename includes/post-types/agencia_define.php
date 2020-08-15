<?php
add_action( 'init', 'create_agencia_type' );
function create_agencia_type() {
	register_post_type( 'mkt_agencia',
		array(
			'labels' => array(
				'name' => __( 'Agencias' ),
				'singular_name' => __( 'Agencia' ),
                'add_new' => 'Nueva agencia',
                'add_new_item' => 'Nueva agencia'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'agencia'),
            'exclude_from_search' => false,
            'supports' => array( 'title', 'editor', 'thumbnail', ),
		)
	);
}




// Register Taxonomy seccion
function custom_taxonomy_seccioncat() {	
	$labels = array(
		'name'                       => 'Región',
		'singular_name'              => 'Región',
		'menu_name'                  => 'Regiones',
	);
	
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,		
	);
	register_taxonomy( 'seccionagencia', array( 'mkt_agencia' ), $args );
}
add_action( 'init', 'custom_taxonomy_seccioncat', 0 );

// Agregar metaboxes
add_action( 'cmb2_init', 'mkt_add_metabox_agencia' );
function mkt_add_metabox_agencia() {

	$prefix = '_mkt_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'agencia',
		'title'        => __( 'Caracteristicas de las agencias', 'cmb2' ),
		'object_types' => array( 'mkt_agencia' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	// Subtexto   
	$cmb->add_field( array(
			'name' => __( 'Subtexto Agencia', 'cmb2' ),
			'id' => $prefix . 'subtexto_agencia',
			'type' => 'text',
		));
	// Subtexto   
	$cmb->add_field( array(
		'name' => __( 'Dirección Agencia', 'cmb2' ),
		'id' => $prefix . 'direccion_agencia',
		'type' => 'text',
	));


	$cmb->add_field( array(
		'name' => __( 'Teléfono Agencia', 'cmb2' ),
		'id' => $prefix . 'tel_agencia',
		'type' => 'text',
	));


	
		
	
}

?>