<?php
/**
 * The search results template
 *
 * @package Solidus
 * @subpackage Templates
 */

get_header(); ?>
<?php global $wp_query; ?>
<div class="row">
	<div class="col-3">
		<?php if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
		if ( is_active_sidebar( 'search' ) ) {
			dynamic_sidebar( 'search' );
		} ?>
	</div>
	<div class="col-9">
		<main>
			<header>
				<h1><?php echo esc_html( get_search_query() ); ?></h1>
			</header>
			<p><?php printf(
				esc_html(
					_n(
						'%1$s result found.',
						'%1$s results found.',
						$wp_query->found_posts,
						'solidus'
					)
				),
				number_format_i18n( $wp_query->found_posts )
			); ?></p>
			<?php if ( have_posts() ) : ?>
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
				<?php get_template_part( 'template-parts/pag', 'posts' ); ?>
			<?php else : ?>
			<?php endif; ?>
		</main>
		<footer>
			<?php if ( is_active_sidebar( 'footer' ) ) {
				dynamic_sidebar( 'footer' );
			} ?>
		</footer>
	</div>
</div>
<?php get_footer();
