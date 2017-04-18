<?php
/**
 * The front page template
 *
 * @package Solidus
 * @subpackage Templates
 */

get_header(); ?>
<div class="col-3">
	<header>
		<?php if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		} ?>
		<h1><?php echo esc_html( get_bloginfo( 'description' ) ); ?></h1>
		<?php if ( is_active_sidebar( 'home' ) ) {
			dynamic_sidebar( 'home' );
		} ?>
	</header>
</div>
<?php $categories = get_categories( array(
	'hide_empty' => false,
	'number'     => 3,
	'orderby'    => 'name'
) ); ?>
<div class="col-9">
	<div class="row">
		<?php foreach ( $categories as $category ) { ?>
			<div class="col-4">
				<?php printf(
					'<h2>%1$s</h2>',
					esc_html( $category->name )
				);
				$posts = get_posts( array(
					'category'       => $category->term_id,
					'posts_per_page' => 6
				) ); ?>
				<ul class="post-list">
					<?php foreach ( $posts as $post ) {
						setup_postdata( $post ); ?>
						<li>
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
					<?php }
					wp_reset_postdata(); ?>
				</ul>
				<?php printf(
					'<p>%1$s <a href="%2$s">%3$s</a></p>',
					esc_html__( 'See all', 'solidus' ),
					esc_url( get_category_link( $category->term_id ) ),
					esc_html( $category->name )
				); ?>
			</div>
		<?php } ?>
	</div>
	<div class="row">
		<div class="col-12">
			<footer>
				<?php if ( is_active_sidebar( 'footer' ) ) {
					dynamic_sidebar( 'footer' );
				}
				wp_footer(); ?>
			</footer>
		</div>
	</div>
</div>
<?php get_footer();
