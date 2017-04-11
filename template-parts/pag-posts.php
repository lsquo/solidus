<?php
/**
 * The posts pagination template part
 *
 * @package Solidus
 * @subpackage Templates
 */

the_posts_navigation(
	array(
		'prev_text' => __( 'Previous', 'solidus' ),
		'next_text' => __( 'Next', 'solidus' )
	)
);
