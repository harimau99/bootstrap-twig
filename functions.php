<?php

// autoloader
require_once (__DIR__ . '/vendor/autoload.php');

new BootstrapTwigSite();

// removes the default image from WooCommerce, so we can add our own manually
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail' );