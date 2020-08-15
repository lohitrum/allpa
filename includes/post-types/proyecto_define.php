<?php
add_action( 'init', 'create_proyecto_type' );
function create_proyecto_type() {
	register_post_type( 'mkt_proyecto',
		array(
			'labels' => array(
				'name' => __( 'Proyectos' ),
				'singular_name' => __( 'Proyecto' ),
                'add_new' => 'Nuevo proyecto',
                'add_new_item' => 'Nuevo proyecto'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'proyecto'),
            'exclude_from_search' => false,
            'supports' => array( 'title', 'editor', 'thumbnail', ),
		)
	);
}




// Register Taxonomy seccion
function custom_taxonomy_seccioncat() {	
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
	register_taxonomy( 'seccionproyecto', array( 'mkt_proyecto' ), $args );
}
add_action( 'init', 'custom_taxonomy_seccioncat', 0 );


// Register Taxonomy seccion
function custom_taxonomy_pais() {	
	$labels = array(
		'name'                       => 'Pais',
		'singular_name'              => 'Pais',
		'menu_name'                  => 'Paises',
	);
	
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,		
	);
	register_taxonomy( 'paisproyecto', array( 'mkt_proyecto' ), $args );
}
add_action( 'init', 'custom_taxonomy_pais', 0 );


// Agregar metaboxes
add_action( 'cmb2_init', 'mkt_add_metabox_proyecto' );
function mkt_add_metabox_proyecto() {

	$prefix = '_mkt_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'proyecto',
		'title'        => __( 'Caracteristicas de los proyectos', 'cmb2' ),
		'object_types' => array( 'mkt_proyecto' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	
	// Subtexto   
	$cmb->add_field( array(
		'name' => __( 'Texto Banner proyecto', 'cmb2' ),
		'id' => $prefix . 'texto_proyecto',
		'type' => 'text',
	));


	$cmb->add_field( array(
		'name' => __( 'Imagen Banner', 'cmb2' ),
		'id' => $prefix . 'banner_proyecto',
		'type' => 'file',
	));

	// Subtexto   
	$cmb->add_field( array(
		'name' => __( 'Alcance del Trabajo', 'cmb2' ),
		'id' => $prefix . 'alcance_proyecto',
		'type' => 'text',
	));

	//Trip
	$cmb->add_field( array(
		'name'    => esc_html__( 'Problema', 'cmb2' ),		
		'id'      => $prefix . 'problema_proyecto',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	//Trip
	$cmb->add_field( array(
		'name'    => esc_html__( 'Visión', 'cmb2' ),		
		'id'      => $prefix . 'vision_proyecto',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	//Trip
	$cmb->add_field( array(
		'name'    => esc_html__( 'Solución', 'cmb2' ),		
		'id'      => $prefix . 'solucion_proyecto',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	//Trip
	$cmb->add_field( array(
		'name'    => esc_html__( 'Resultados', 'cmb2' ),		
		'id'      => $prefix . 'resultado_proyecto',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	
		
	
}

?>