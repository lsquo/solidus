<?php
/**
 * The comments template
 *
 * @package Solidus
 * @subpackage Templates
 */

if ( post_password_required() ) {
	return;
} ?>
<h2 id="comments"><?php printf(
	esc_html(
		_n(
			'%1$s comment',
			'%1$s comments',
			get_comments_number(),
			'solidus'
		)
	),
	number_format_i18n( get_comments_number() )
); ?></h2>
<?php if ( have_comments() ) { ?>
	<ul class="comment-list">
		<?php wp_list_comments(
			array(
				'style'    => 'ul',
				'callback' => 'solidus_comment'
			)
		); ?>
	</ul>
	<?php get_template_part( 'template-parts/pag', 'comments' );
}
if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
	<p><?php esc_html_e( 'Comments are closed.', 'solidus' ); ?></p>
<?php }
comment_form();
