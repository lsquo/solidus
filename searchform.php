<?php
/**
 * The search form template
 *
 * @package Solidus
 * @subpackage Templates
 */
?>

<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<input type="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php esc_html_e( 'Search', 'solidus' ); ?>">
	<input type="submit" class="screen-reader-text" value="<?php esc_attr_e( 'Search', 'solidus' ); ?>">
</form>
