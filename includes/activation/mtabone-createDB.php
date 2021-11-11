<?php
    function mtabone_createTablesDB(){
        
        mtabone_createTableSettings();

    }

    function mtabone_createTableSettings(){
        $sql = 
        "
            CREATE TABLE IF NOT EXISTS ".$GLOBALS['mtabone_tableSettings']." (
                `settings_id` INT NOT NULL AUTO_INCREMENT,
                `settings_name` VARCHAR(80) NULL,
                `settings_email` VARCHAR(255) NULL,
                PRIMARY KEY (`settings_id`)
            )".$GLOBALS['mtabone_charsetCollate'].";
        ";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }