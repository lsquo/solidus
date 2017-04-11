<?php
/**
 * The post pagination template part
 *
 * @package Solidus
 * @subpackage Templates
 */

wp_link_pages(
	array(
		'before'           => '<nav role="navigation">',
		'after'            => '</nav>',
		'next_or_number'   => 'next',
		'nextpagelink'     => __( 'Next', 'solidus' ),
		'previouspagelink' => __( 'Previous', 'solidus' )
	)
);
