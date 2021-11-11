<?php

    function mtabone_createDefaultVars(){

        global $icon_url;
        $icon_url = plugins_url( '../assets/icons/iconAdmPainel.png', __FILE__ );

        // For Sqls--->
        
        global $wpdb;
        
        global $mtabone_dBName;
        $mtabone_dBName = $wpdb->prefix;

        global $mtabone_charsetCollate;
        $mtabone_charsetCollate = $wpdb->get_charset_collate();

        global $mtabone_tableSettings;
        $mtabone_tableSettings = $mtabone_dBName."mtabone_settings";

        // -----------<

    }

