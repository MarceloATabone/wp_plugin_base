<?php

    function mtabone_loadLibs(){
        //wp_register_script( 'mtabone_bootstrap_lib', plugins_url( '../../includes/libs/bootstrap/bootstrap.js', __FILE__ ),array('jquery'),false,true );
        //wp_enqueue_script( 'mtabone_bootstrap_lib');
    }
    function mtabone_loadCss() {
        wp_enqueue_style('mtabone-style-css', plugins_url('../css/mtabone-style.css', __FILE__));
    }
    function mtabone_loadScripts() {
        // Load JS Util ---->
        wp_register_script( 'mtabone_utilities_scripts', plugins_url( '../../includes/js/mtabone-utilities.js', __FILE__ ),array('jquery'),false,true );
        wp_enqueue_script( 'mtabone_utilities_scripts');

        $script_utilitiesData = array('admin_ajax' => admin_url( 'admin-ajax.php' ));
        wp_localize_script('mtabone_utilities_scripts','wpa_dataUtilities', $script_utilitiesData );
        //------------------<
        
        //Manager General Script
        wp_register_script( 'mtabone_general_scripts', plugins_url( '../../includes/js/managers/mtabone-manage-general.js', __FILE__ ),array('jquery'),false,true );
        wp_enqueue_script( 'mtabone_general_scripts');

        $script_generalData = array('admin_ajax' => admin_url( 'admin-ajax.php' ));
        wp_localize_script('mtabone_general_scripts','wpa_dataGeneral', $script_generalData );
        //------------------------<

        //Manager Content Script
        wp_register_script( 'mtabone_content_scripts', plugins_url( '../../includes/js/managers/mtabone-manage-content.js', __FILE__ ),array('jquery'),false,true );
        wp_enqueue_script( 'mtabone_content_scripts');

        $script_contentData = array('admin_ajax' => admin_url( 'admin-ajax.php' ));
        wp_localize_script('mtabone_content_scripts','wpa_dataContent', $script_contentData );
        //------------------------<

        //Manager Settings Script
        wp_register_script( 'mtabone_settings_scripts', plugins_url( '../../includes/js/managers/mtabone-manage-settings.js', __FILE__ ),array('jquery'),false,true );
        wp_enqueue_script( 'mtabone_settings_scripts');

        $script_settingsData = array('admin_ajax' => admin_url( 'admin-ajax.php' ));
        wp_localize_script('mtabone_settings_scripts','wpa_dataSettings', $script_settingsData );
        //------------------------<
    }
