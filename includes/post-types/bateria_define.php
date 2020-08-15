<?php
add_action( 'init', 'create_bateria_type' );
function create_bateria_type() {
	register_post_type( 'mkt_bateria',
		array(
			'labels' => array(
				'name' => __( 'Baterias' ),
				'singular_name' => __( 'Bateria' ),
                'add_new' => 'Nueva Bateria',
                'add_new_item' => 'Nueva Bateria'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'baterias'),
            'exclude_from_search' => false,
            'supports' => array( 'title', 'editor', 'thumbnail', ),
		)
	);
}




// Register Taxonomy seccion
function custom_taxonomy_seccioncat() {	
	$labels = array(
		'name'                       => 'Tipo de Bateria',
		'singular_name'              => 'Tipo de Bateria',
		'menu_name'                  => 'Tipos de Bateria',
	);
	
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,		
	);
	register_taxonomy( 'seccionbateria', array( 'mkt_bateria' ), $args );
}
add_action( 'init', 'custom_taxonomy_seccioncat', 0 );


// Register Taxonomy seccion
function custom_taxonomy_pais() {	
	$labels = array(
		'name'                       => 'Marca',
		'singular_name'              => 'Marca',
		'menu_name'                  => 'Marcas',
	);
	
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,		
	);
	register_taxonomy( 'marcabateria', array( 'mkt_bateria' ), $args );
}
add_action( 'init', 'custom_taxonomy_pais', 0 );


// Agregar metaboxes
add_action( 'cmb2_init', 'mkt_add_metabox_bateria' );
function mkt_add_metabox_bateria() {

	$prefix = '_mkt_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'bateria',
		'title'        => __( 'Caracteristicas de los baterias', 'cmb2' ),
		'object_types' => array( 'mkt_bateria' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	
	// Subtexto   
	$cmb->add_field( array(
		'name' => __( 'Garantía Bateria', 'cmb2' ),
		'id' => $prefix . 'garantia_bateria',
		'type' => 'text',
	));


	$cmb->add_field( array(
		'name' => __( 'Mantenimiento Bateria', 'cmb2' ),
		'id' => $prefix . 'mantenimiento_bateria',
		'type' => 'text',
	));

	$cmb->add_field( array(
		'name' => __( 'Información Adicional Bateria', 'cmb2' ),
		'id' => $prefix . 'informacion',
		'type' => 'text',
	));

	// Subtexto   
	$cmb->add_field( array(
		'name' => __( 'Ficha Técnica', 'cmb2' ),
		'id' => $prefix . 'ficha_bateria',
		'type' => 'file',
	));		
	
}

?>