<?php
/**
 * The attachment template
 *
 * @package Solidus
 * @subpackage Templates
 */

get_header();
while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="col-12">
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
		</div>
	</div>
<?php endwhile;
get_footer();
