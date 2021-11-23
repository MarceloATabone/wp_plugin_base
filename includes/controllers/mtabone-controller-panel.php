<?php

    function mtabone_panel(){
        //add_menu_page('Plugin Base','Plugin Base', 'manage_options', 'mtabone-main-menu', 'mtabone_mainMenu','dashicons-admin-generic');
        $mtabone_rule_panel = 'manage_options';
        add_menu_page('Plugin Base','Plugin Base', $mtabone_rule_panel, 'mtabone-main-menu', 'mtabone_mainMenu', $GLOBALS['icon_url'] );
        add_submenu_page('mtabone-main-menu', "Geral" , "► ".$GLOBALS['mtabone_panel_title_general'].""  , $mtabone_rule_panel, 'mtabone-main-menu' );
        add_submenu_page('mtabone-main-menu', "Content", "► ".$GLOBALS['mtabone_panel_title_content']."" , $mtabone_rule_panel, 'mt-mm-sub-content' , 'mtabone_subMenu_Content');
        add_submenu_page('mtabone-main-menu', "Settings", "► ".$GLOBALS['mtabone_panel_title_settings']."" , $mtabone_rule_panel, 'mt-mm-sub-settings' , 'mtabone_subMenu_Settings');
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