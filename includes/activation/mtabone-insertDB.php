<?php
    function mtabone_insertTablesDB(){
        mtabone_defineConsts();
        //mtabone_insertGeneric();
    }

    function mtabone_insertGeneric(){
        global $wpdb;
        $table_name = $wpdb->prefix . "mtabone_generic";   
        if ( $wpdb->get_var("SHOW TABLES LIKE '{$table_name}'") == $table_name ) {
            $wpdb->query("DELETE FROM `$table_name`;");
            $wpdb->query("ALTER TABLE `$table_name` AUTO_INCREMENT = 0;");
            $query = "
            INSERT INTO `$table_name` (`generic_name`) VALUES ('generic01');";
            $wpdb->query($query);
        } 
    }
