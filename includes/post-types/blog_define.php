<?php 
    // Agregar metaboxes
add_action( 'cmb2_init', 'mkt_add_metabox_blog' );
function mkt_add_metabox_blog() {

	$prefix = '_mkt_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'post',
		'title'        => __( 'Caracteristicas del blog', 'cmb2' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	));
	
	// Subtexto   
	$cmb->add_field( array(
		'name' => __( 'Autor', 'cmb2' ),
		'id' => $prefix . 'autor_blog',
		'type' => 'text',
    ));
    
    $cmb->add_field( array(
		'name' => __( 'Tiempo lectura', 'cmb2' ),
		'id' => $prefix . 'time_read',
		'type' => 'text',
	));
}
?>