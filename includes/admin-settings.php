<?php

if (!defined('ABSPATH')) {
    exit;
}

// Add a settings tab in WooCommerce.
add_filter('woocommerce_settings_tabs_array', 'add_smart_address_settings_tab', 50);
function add_smart_address_settings_tab($settings_tabs)
{
    $settings_tabs['smart_address'] = __('Smart Address', 'smart-address');
    return $settings_tabs;
}

// Add settings to the tab.
add_action('woocommerce_settings_tabs_smart_address', 'smart_address_settings');
function smart_address_settings()
{
    woocommerce_admin_fields(get_smart_address_settings());
}

// Save the settings.
add_action('woocommerce_update_options_smart_address', 'update_smart_address_settings');
function update_smart_address_settings()
{
    woocommerce_update_options(get_smart_address_settings());
}

// Define the settings.
function get_smart_address_settings()
{

    $settings = array(
        'section_title' => array(
            'name'     => __('Smart Address Settings', 'smart-address'),
            'type'     => 'title',
            'desc'     => '',
            'id'       => 'smart_address_section_title'
        ),
        'api_key' => array(
            'name' => __('API Key', 'smart-address'),
            'type' => 'text',
            'desc' => __('Enter your API key here. <a href="https://smartaddress.au" target="_blank">Click here</a> to get one. ', 'smart-address'),
            'id'   => 'smart_address_api_key'
        ),
        'enable_extension' => array(
            'name' => __('Enable Plugin', 'smart-address'),
            'type' => 'checkbox',
            'desc' => __('Enable the Smart Address plugin.', 'smart-address'),
            'id'   => 'smart_address_enable_extension'
        ),
        'country_list' => array(
            'name' => __('Default Country', 'smart-address'),
            'type' => 'select',
            'desc' => __('Select the default country.', 'smart-address'),
            'id'   => 'smart_address_country_list',
            'options' => array(
                'all' => __('All Countries', 'smart-address'),
                'au'  => __('Australia', 'smart-address'),
            ),
            'default' => 'au'
        ),
        'section_end' => array(
            'type' => 'sectionend',
            'id'   => 'smart_address_section_end'
        )
    );

    return $settings;
}
