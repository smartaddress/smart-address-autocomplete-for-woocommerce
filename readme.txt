=== Smart Address for WooCommerce ===
Contributors: smartaddress
Tags: woocommerce, address, autocomplete, checkout
Requires at least: 5.0
Tested up to: 6.5.2
Requires PHP: 7.0
Stable tag: 1.0.2
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Enhance your WooCommerce store's checkout experience with the Smart Address Unit-Level  Address Autocomplete for WooCommerce plugin.

== Description ==

Enhance your WooCommerce store's checkout experience with the Smart Address Autocomplete for WooCommerce plugin. This tool integrates the Smart Address API to provide precise, unit-level address autocomplete functionality, ensuring every delivery is accurately addressed.

By integrating the Smart Address API, our plugin helps reduce the incidence of incorrect addresses, thus maintaining high customer satisfaction, decreasing the number of delivery retries, and saving time and money. Simplify your checkout process and boost your operational efficiency with Smart Address Autocomplete—a strategic choice for any WooCommerce store focused on delivery.

Key Features:

* Unit-level autocomplete for Australian addresses.
* Integration for both billing and shipping address fields.
* Minimal impact on site performance due to lightweight design.
* Straightforward setup through a simple WooCommerce settings page.

External Service Usage:

*NOTE:* The Smart Address for WooCommerce plugin relies on external services provided by Smart Address. When activated, this plugin loads an external JavaScript library from https://cdn.smartaddress.au to enable address autocompletion at your WooCommerce checkout page. This external script is a critical component of the functionality provided by our plugin.

To use this plugin, you must:

1. Create a free account at Smart Address.
2. Generate an API key.
3. Input this API key in the plugin's settings within WooCommerce.

For detailed information about how your data is handled, please review the [Smart Address Privacy Policy and Terms of Service](https://smartaddress.au/terms).

Legal Compliance:

This plugin communicates with the Smart Address API, sending address data to Smart Address servers for processing. Users must agree to the [Smart Address Terms of Service](https://smartaddress.au/terms) and be informed about the data handling practices outlined in the [Smart Address Terms of Service](https://smartaddress.au/terms) before utilizing the plugin.

== Installation ==

Installing Smart Address for WooCommerce is straightforward, just follow the steps below. 

1. Upload the plugin files to the `/wp-content/plugins/smart-address-autocomplete-for-woocommerce` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Go to WooCommerce > Settings > Smart Address to configure the plugin.
4. Enter your API key and select your preferred settings.
5. Save your changes and enjoy smart address autocomplete on your checkout page!

*[Click here](https://smartaddress.au) if you don't have an Smart Address API key*

== Frequently Asked Questions ==

= Does this plugin work with all address APIs? =

The plugin is designed to work with [Smart Address API](https://smartaddress.au) that returns Australian unit-level address suggestions.

= Can I use this plugin for both billing and shipping addresses? =

Yes! Smart Address for WooCommerce supports autocomplete for both billing and shipping address fields.

== Changelog ==

= 1.0.0 =
* Initial release.

= 1.0.1 =
* [UPDATE] Tested up to WordPress 6.5.2

= 1.0.2 =
* [NEW] Redirect to Settings page on plugin activation

= 1.0.3 =
* [FIX] Updated script enqueuing 