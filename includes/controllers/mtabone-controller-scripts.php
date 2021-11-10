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
    }
