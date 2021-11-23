<?php

    function mtabone_createDefaultVars(){

        // General
        global $icon_url;
        $icon_url = plugins_url( '../assets/icons/iconAdmPainel.png', __FILE__ );
        // -----------<

        // For Sqls--->
        
        global $wpdb;
        
        global $mtabone_dBName;
        $mtabone_dBName = $wpdb->prefix;

        global $mtabone_charsetCollate;
        $mtabone_charsetCollate = $wpdb->get_charset_collate();

            //-Settings-->
            global $mtabone_tableSettings;
            $mtabone_tableSettings = $mtabone_dBName."mtabone_settings";
            global $mtabone_settings_columnID;
            $mtabone_settings_columnID = "settings_id";
            global $mtabone_settings_columnName;
            $mtabone_settings_columnName = "settings_name";
            global $mtabone_settings_columnEmail;
            $mtabone_settings_columnEmail = "settings_email";
            //------------<


        // -----------<

    }

