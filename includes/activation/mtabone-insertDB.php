<?php
    function mtabone_insertTablesDB(){
        mtabone_insertSettings();
    }

    function mtabone_insertSettings(){
        global $wpdb;
        $table_name = $GLOBALS['mtabone_tableSettings'];
        if ( $wpdb->get_var("SHOW TABLES LIKE '{$table_name}'") == $table_name ) {
            $wpdb->query("DELETE FROM `$table_name`;");
            $wpdb->query("ALTER TABLE `$table_name` AUTO_INCREMENT = 0;");
            $query = "
            INSERT INTO `$table_name` (`settings_id`) VALUES (0);";
            $wpdb->query($query);
        } 
    }
