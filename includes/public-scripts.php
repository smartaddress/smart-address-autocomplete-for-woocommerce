<?php

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

add_action('wp_footer', function () {
    if (is_checkout()) {

        // Check if the plugin is enabled.
        if ('yes' === get_option('smart_address_enable_extension')) {

            // Get the API key from the options.
            $api_key = get_option('smart_address_api_key');

            // Enqueue the remote JS file.
            wp_enqueue_script('smart-address-remote', 'https://cdn.smartaddress.au/smart-address-woocommerce.js?key=' . $api_key, array(), time(), true);

            // Pass the API nonce to the enqueued script.
            wp_localize_script('smart-address-remote', 'wc_store_params', [
                'api_nonce' => wp_create_nonce('wc_store_api')
              ]);

        }
    }

});
