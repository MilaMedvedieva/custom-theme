<?php
/**
 * Separete woocommerce functions
 * by templates where they used
 */

require 'woocommerce/woocommerce-login-registration.php';
require 'woocommerce/woocommerce-dashboard.php';
require 'woocommerce/woocommerce-shop.php';
require 'woocommerce/woocommerce-single-product.php';
require 'woocommerce/woocommerce-cart.php';
require 'woocommerce/woocommerce-checkout.php';


add_filter( 'woocommerce_enqueue_styles', 'woocommerce_dequeue_styles' );


/**
 * Remove WooCommerce style
 */
function woocommerce_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	    // common styles
    unset( $enqueue_styles['woocommerce-layout'] );		    // layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Rsmallscreen optimisation
	return $enqueue_styles;
}


?>

