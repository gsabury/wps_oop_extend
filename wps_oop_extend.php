<?php
/*
Plugin Name: Bank Gateway Settings
Plugin URI: https://yaransof.com
Description: Bank Gateway Settings
Author: Ghafor Sabury
Version: 1.0.0
Author URI:  https://yaransoft.com
*/
defined('ABSPATH') || exit('no direct access');

define('WPS_GATEWAY_DIR', plugin_dir_path(__FILE__));
define('WPS_GATEWAY_TPL', trailingslashit(WPS_GATEWAY_DIR . 'tpl'));

include WPS_GATEWAY_DIR . 'WPS_Settings_Gateway.php';

function wps_oop_extended_ass_setting($args)
{
    $args['gateways'] = 'WPS_Settings_Gateway';
    return $args;
}

add_filter('wps_settings_handler', 'wps_oop_extended_ass_setting');
