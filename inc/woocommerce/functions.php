<?php
/**
 * General functions used to integrate this theme with WooCommerce.
 *
 * @package vulcano
 */

if ( ! function_exists( 'vulcano_before_content' ) ) {
	/**
	 * Before Content
	 * Wraps all WooCommerce content in wrappers which match the theme markup
	 * @since   2.2.6
	 * @return  void
	 */
	function vulcano_before_content() {
		?>
		<main id="content" class="<?php echo vulcano_classes_page_sidebar(); ?>" tabindex="-1" role="main">
		<?php
	}
}

if ( ! function_exists( 'vulcano_after_content' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 * @since   2.2.6
	 * @return  void
	 */
	function vulcano_after_content() {
		?>
		</main><!-- #main -->
		<?php
	}
}

/**
 * Default loop columns on product archives
 * @return integer products per row
 * @since  1.0.0
 */
function vulcano_loop_columns() {
	return apply_filters( 'vulcano_loop_columns', 4 ); // 4 products per row
}

/**
 * Product gallery thumnail columns
 * @return integer number of columns
 * @since  1.0.0
 */
function vulcano_thumbnail_columns() {
	return intval( apply_filters( 'vulcano_product_thumbnail_columns', 4 ) );
}

/**
 * Products per page
 * @return integer number of products
 * @since  1.0.0
 */
function vulcano_products_per_page() {
	return intval( apply_filters( 'vulcano_products_per_page', 12 ) );
}
