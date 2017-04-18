<?php
/**
 * The page template
 *
 * @package Solidus
 * @subpackage Templates
 */

get_header(); ?>
<div class="col-3">
	<?php if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	} ?>
	<header>
		<?php if ( is_front_page() ) { ?>
			<h1><?php echo esc_html( get_bloginfo( 'description' ) ); ?></h1>
		<?php } else { ?>
			<p class="site-title"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
		<?php }
		if ( is_active_sidebar( 'header' ) ) {
			dynamic_sidebar( 'header' );
		} ?>
	</header>
</div>
<div class="col-9">
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
	<footer>
		<?php if ( is_active_sidebar( 'footer' ) ) {
			dynamic_sidebar( 'footer' );
		}
		wp_footer(); ?>
	</footer>
</div>
<?php get_footer();
