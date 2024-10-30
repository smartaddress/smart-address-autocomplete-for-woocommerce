<?php
/*
Plugin Name: Smart Address Autocomplete for WooCommerce
Description: Unit-level Australian address autocomplete for WooCommerce. Accuracy and affordability redefined. Never miss a delivery again!
Version: 1.0.3
Author: <a href="https://smartaddress.au">Smart Address</a>
License: GPLv3 or later
Text Domain: smart-address-autocomplete-for-woocommerce
Requires Plugins: woocommerce
*/

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

define('SMART_ADDRESS_VERSION', '1.0.2');

// Check if WooCommerce is active.
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

    // Include the main plugin file.
    include_once 'includes/admin-settings.php';

    // Include the public scripts file.
    include_once 'includes/public-scripts.php';
}

// Add the plugin activation and deactivation hooks.
register_activation_hook(__FILE__, 'smart_address_activate');
function smart_address_activate()
{
    if (!class_exists('WooCommerce')) {
        deactivate_plugins(plugin_basename(__FILE__));
        wp_die('This plugin requires WooCommerce to be installed and active.');
    }

    // Set a transient to redirect to the settings page
    set_transient('smart_address_activation_redirect', true, 30);
}

add_action('admin_init', 'smart_address_redirect_after_activation');
function smart_address_redirect_after_activation()
{
    // Check if the transient is set, and if so, delete it and redirect.
    if (get_transient('smart_address_activation_redirect')) {
        delete_transient('smart_address_activation_redirect');
        if (!isset($_GET['activate-multi'])) {
            wp_redirect(admin_url('admin.php?page=wc-settings&tab=smart_address'));
            exit;
        }
    }
}

// Add the plugin uninstall hook.
register_uninstall_hook(__FILE__, 'smart_address_uninstall');
function smart_address_uninstall()
{
    delete_option('smart_address_api_key');
    delete_option('smart_address_enable_extension');
    delete_option('smart_address_country_list');
}

// Add the settings link to the plugin.
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'smart_address_action_links');
function smart_address_action_links($links)
{
    $settings_link = '<a href="' . admin_url('admin.php?page=wc-settings&tab=smart_address') . '">' . __('Settings', 'smart-address-autocomplete-for-woocommerce') . '</a>';
    array_unshift($links, $settings_link);
    return $links;
}
