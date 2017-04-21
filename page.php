<?php
/**
 * The page template
 *
 * @package Solidus
 * @subpackage Templates
 */

get_header(); ?>
<div class="row">
	<div class="col-3">
		<?php if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
		if ( is_active_sidebar( 'page' ) ) {
			dynamic_sidebar( 'page' );
		} ?>
	</div>
	<div class="col-9">
		<main>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class(); ?>>
					<?php the_title( '<header><h1>', '</h1></header>' ); ?>
					<?php if ( has_post_thumbnail() ) { ?>
						<figure>
							<?php the_post_thumbnail();
							$post_excerpt = get_post( get_post_thumbnail_id() )->post_excerpt;
							if ( $post_excerpt ) { ?>
								<figcaption><?php echo $post_excerpt; ?></figcaption>
							<?php } ?>
						</figure>
					<?php }
					the_content();
					get_template_part( 'template-parts/pag', 'post' );
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					} ?>
				</article>
			<?php endwhile; ?>
		</main>
		<footer>
			<?php if ( is_active_sidebar( 'footer' ) ) {
				dynamic_sidebar( 'footer' );
			} ?>
		</footer>
	</div>
</div>
<?php get_footer();
