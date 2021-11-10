<?php

    function mtabone_painel(){
        add_menu_page('Plugin Base','Plugin Base', 'manage_options', 'mtabone-main-menu', 'mtabone_mainMenu','dashicons-admin-generic');
        add_submenu_page('mtabone-main-menu', "Geral" , "► Geral"  , 'manage_options', 'mtabone-main-menu' );
        add_submenu_page('mtabone-main-menu', "Content", "► Content" , 'manage_options', 'mt-mm-sub-content' , 'mtabone_subMenu_Content');
        add_submenu_page('mtabone-main-menu', "Settings", "► Settings" , 'manage_options', 'mt-mm-sub-settings' , 'mtabone_subMenu_Settings');
    }  

    function mtabone_mainMenu(){
        echo "</br>";
        require_once plugin_dir_path(__FILE__).'../templates/mtabone-view-general.php';
    }

    function mtabone_subMenu_Content(){
        echo "</br>";
        require_once plugin_dir_path(__FILE__).'../templates/mtabone-view-content.php';
    }

    function mtabone_subMenu_Settings(){
        echo "</br>";
        require_once plugin_dir_path(__FILE__).'../templates/mtabone-view-settings.php';
    }