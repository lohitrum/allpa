<?php

add_action( 'init', 'create_capacitacion_type' );

function create_capacitacion_type() {

	register_post_type( 'mkt_capacitacion',

		array(

			'labels' => array(

				'name' => __( 'Capacitaciones' ),

				'singular_name' => __( 'capacitacion' ),

                'add_new' => 'Nuevo capacitación',

                'add_new_item' => 'Nuevo capacitación'

			),

			'public' => true,

			'has_archive' => true,

			'rewrite' => array('slug' => 'capacitacion'),

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

	register_taxonomy( 'seccioncapacitacion', array( 'mkt_capacitacion' ), $args );

}

add_action( 'init', 'custom_taxonomy_seccioncat', 0 );


// Agregar metaboxes

add_action( 'cmb2_init', 'mkt_add_metabox_capacitacion' );

function mkt_add_metabox_capacitacion() {



	$prefix = '_mkt_';



	$cmb = new_cmb2_box( array(

		'id'           => $prefix . 'capacitacion',

		'title'        => __( 'Caracteristicas de los capacitacions', 'cmb2' ),

		'object_types' => array( 'mkt_capacitacion' ),

		'context'      => 'normal',

		'priority'     => 'default',

	) );

	

	// Subtexto   

	$cmb->add_field( array(

		'name' => __( 'Subtexto capacitacion', 'cmb2' ),

		'id' => $prefix . 'subtexto_capacitacion',

		'type' => 'text',

	));





	$cmb->add_field( array(

		'name' => __( 'File Capacitación', 'cmb2' ),

		'id' => $prefix . 'file_capacitacion',

		'type' => 'file',

	));





	//Trip

	$cmb->add_field( array(

		'name'    => esc_html__( 'Alcance', 'cmb2' ),		

		'id'      => $prefix . 'alcance_capacitacion',

		'type'    => 'wysiwyg',

		'options' => array(

			'textarea_rows' => 5,

		),

	) );

	//Trip

	$cmb->add_field( array(

		'name'    => esc_html__( 'Descripción capacitacion', 'cmb2' ),		

		'id'      => $prefix . 'descripcion_capacitacion',

		'type'    => 'wysiwyg',

		'options' => array(

			'textarea_rows' => 5,

		),

	) );	

}



?>