<?php
/**
 * The 404 template
 *
 * @package Solidus
 * @subpackage Templates
 */

get_header(); ?>
<div class="col-3">
	<?php if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
	if ( is_active_sidebar( '404' ) ) {
		dynamic_sidebar( '404' );
	} ?>
</div>
<div class="col-9">
	<header>
		<h1><?php esc_html_e( 'Eek!', 'solidus' ); ?></h1>
	</header>
	<p><?php esc_html_e( 'This isn\'t the page you\'re looking for.', 'solidus' ); ?></p>
	<footer>
		<?php if ( is_active_sidebar( 'footer' ) ) {
			dynamic_sidebar( 'footer' );
		}
		wp_footer(); ?>
	</footer>
</div>
<?php get_footer();
