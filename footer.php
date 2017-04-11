<?php
/**
 * The footer template
 *
 * @package Solidus
 * @subpackage Templates
 */
?>
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
		</main>
	</body>
</html>