<?php
/**
 * The post template
 *
 * @package Solidus
 * @subpackage Templates
 */

get_header();
while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="col-12">
			<article <?php post_class(); ?>>
				<?php if ( has_category() ) { ?>
					<p><?php echo get_the_category_list( ', ' ); ?></p>
				<?php }
				the_title( '<header><h1>', '</h1></header>' );
				if ( has_post_thumbnail() ) { ?>
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
				if ( has_tag() ) { ?>
					<p><?php esc_html_e( 'Tagged', 'solidus' ); ?> <?php echo get_the_tag_list( '', ', ', '' ); ?></p>
				<?php } ?>
				<address><?php printf(
					esc_html__( 'Posted by %1$s on %2$s.', 'solidus' ),
					get_the_author_posts_link(),
					sprintf(
						'<time datetime="%1$s">%2$s</time>',
						esc_attr( get_the_date( 'c' ) ),
						esc_html( get_the_date() )
					)
				); ?></address>
				<?php if ( comments_open() || get_comments_number() ) {
					comments_template();
				} ?>
			</article>
		</div>
	</div>
<?php endwhile;
get_footer();
