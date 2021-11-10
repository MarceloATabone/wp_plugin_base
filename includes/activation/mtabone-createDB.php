<?php
    function mtabone_createTablesDB(){
        mtabone_defineConsts();
        // mtabone_createTableGeneric();
    }

    function mtabone_defineConsts(){
        global $wpdb;
        $DB_NAME = $wpdb->prefix;
        $mtabone_charsetCollate = $wpdb->get_charset_collate();
        define('MTABONE_TABLEGeneric', $DB_NAME."mtabone_generic" );
    }

    function mtabone_createTableGeneric(){
        $sql = 
        "
            CREATE TABLE IF NOT EXISTS ".MTABONE_TABLEGeneric." (
                `generic_id` INT NOT NULL AUTO_INCREMENT,
                `generic_name` VARCHAR(80) NOT NULL,
            )$mtabone_charsetCollate;
        ";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }