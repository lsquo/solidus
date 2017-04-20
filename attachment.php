<?php
/**
 * The attachment template
 *
 * @package Solidus
 * @subpackage Templates
 */

get_header(); ?>
<div class="col-3">
	<?php if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
	if ( is_active_sidebar( 'post' ) ) {
		dynamic_sidebar( 'post' );
	} ?>
</div>
<div class="col-9">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
			<?php the_title( '<header><h1>', '</h1></header>' );
			$parts = pathinfo( get_attached_file( get_the_ID() ) );
			printf(
				'<p><a href="%1$s">%2$s</a> %3$s</p>',
				esc_url( wp_get_attachment_url( get_the_ID() ) ),
				esc_html( $parts['filename'] ),
				esc_html( $parts['extension'] )
			);
			the_content(); ?>
		</article>
	<?php endwhile; ?>
	<footer>
		<?php if ( is_active_sidebar( 'footer' ) ) {
			dynamic_sidebar( 'footer' );
		}
		wp_footer(); ?>
	</footer>
</div>
<?php get_footer();
