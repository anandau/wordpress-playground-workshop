<?php
/**
 * Helper script to create a WooCommerce simple product.
 *
 * This script checks that WooCommerce is loaded and the WC_Product_Simple
 * class is available before creating a new product. It is intended to be
 * included from a Blueprint runPhp step or used as a mu-plugin file.
 */

if ( ! class_exists( 'WC_Product_Simple' ) ) {
    return;
}

$product = new WC_Product_Simple();
$product->set_name( 'Playground Demo Product' );
$product->set_status( 'publish' );
$product->set_regular_price( '499' );
$product->set_short_description( 'Product created via Blueprint helper script.' );
$product->set_description( 'This product was automatically generated using a custom PHP script in the Playground demo.' );
$product->save();