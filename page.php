<?php
/**
 * The page template
 *
 * @package Solidus
 * @subpackage Templates
 */

get_header();
while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="col-12">
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
		</div>
	</div>
<?php endwhile;
get_footer();
