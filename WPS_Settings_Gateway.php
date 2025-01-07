<?php
class WPS_Settings_Gateway extends WPS_Settings_Contract
{


    public function get_name()
    {
        return 'gateways';
    }

    public function get_title()
    {
        return 'Bank Gateways';
    }

    public function load_body()
    {
        $wps_gateway_saman_is_active = get_option('wps_gateway_saman_is_active');
        include WPS_GATEWAY_TPL . 'settings_gateway.php';
    }

    public function save_settings()
    {


        if (!current_user_can('save_wps_oop_data')) {
            return FALSE;
        }

        $wps_gateway_saman_is_active = isset($_POST['wps_gateway_saman_is_active']) ? 1 : 0;

        update_option('wps_gateway_saman_is_active', $wps_gateway_saman_is_active);
    }
}
