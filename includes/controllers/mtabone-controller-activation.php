<?php

    function mtabone_activationPlugin(){
        // Check wp version
        mtabone_pluginCheckVersion();
        // Manager DB
        mtabone_managerDB();
        // ADD new role for users 
        mtabone_addRoles();
    }

    function mtabone_pluginCheckVersion(){
        if(version_compare(get_bloginfo('version'), '5.8', '<')){
            wp_die("You need to update wordpress (version > 5.7)");
        }
    }

    function mtabone_managerDB(){
        require_once plugin_dir_path(__FILE__).'../activation/mtabone-createDB.php';
        require_once plugin_dir_path(__FILE__).'../activation/mtabone-insertDB.php';
        mtabone_createTablesDB();
        mtabone_insertTablesDB();
    }

    function mtabone_addRoles() {
        //add_role( 'mtabone_role_admin', 'mtabone_admin', array( 'mt_hm_manage_options_admin'=> true , 'mt_hm_manage_options'=> true , 'read' => true, 'level_0' => true ) );
        //add_role( 'mtabone_role_operator', 'mtabone_operator', array( 'mt_hm_manage_options'=> true, 'read' => true, 'level_0' => true ) );
    }

