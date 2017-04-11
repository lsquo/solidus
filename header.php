<?php
/**
 * The header template
 *
 * @package Solidus
 * @subpackage Templates
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<main class="row">
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