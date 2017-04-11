<?php
/**
 * The archive template
 *
 * @package Solidus
 * @subpackage Templates
 */

get_header(); ?>
<div class="row">
	<div class="col-12">
		<?php the_archive_title( '<header><h1>', '</h1></header>' );
		the_archive_description();
		if ( have_posts() ) : ?>
			<ul class="post-list">
				<?php while ( have_posts() ) : the_post(); ?>
					<li <?php post_class(); ?>>
						<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
						<?php the_title(
							sprintf(
								'<a href="%1$s">',
								esc_url( get_permalink() )
							),
							'</a>'
						);
						the_excerpt(); ?>
					</li>
				<?php endwhile; ?>
			</ul>
			<?php get_template_part( 'template-parts/pag', 'posts' );
		else : ?>
			<p><?php esc_html_e( 'No posts found.', 'solidus' ); ?></p>
		<?php endif; ?>
	</div>
</div>
<?php get_footer();
