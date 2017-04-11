<?php
/**
 * The 404 template
 *
 * @package Solidus
 * @subpackage Templates
 */

get_header(); ?>
<div class="row">
	<div class="col-12">
		<header>
			<h1><?php esc_html_e( 'Eek!', 'solidus' ); ?></h1>
		</header>
		<p><?php esc_html_e( 'This isn\'t the page you\'re looking for.', 'solidus' ); ?></p>
	</div>
</div>
<?php get_footer();
