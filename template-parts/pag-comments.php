<?php
/**
 * The comments pagination template part
 *
 * @package Solidus
 * @subpackage Templates
 */

if ( get_comment_pages_count() > 1 ) { ?>
	<nav role="navigation">
		<?php previous_comments_link( __( 'Previous', 'solidus' ) ); ?>
		<?php next_comments_link( __( 'Next', 'solidus' ) ); ?>
	</nav>
<?php }
