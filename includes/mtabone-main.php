<?php

    function mtabone_openDependencies(){
        mtabone_loadResources();
        mtabone_controllLanguage();
        mtabone_createAdminPanel();
        mtabone_loadControllers();
        mtabone_loadShortcodes();
    }

    // Language controller --------------->
    function mtabone_controllLanguage(){
        include( plugin_dir_path( __FILE__ ) . '/controllers/mtabone-controller-language.php');
        add_action('admin_menu', 'mtabone_controllerLanguage');
    }
    //-----------------------------------<  

    // LOADS CSS AND JS AND LIBS--------->
    function mtabone_loadResources(){
        include( plugin_dir_path( __FILE__ ) . '/controllers/mtabone-controller-scripts.php');
        add_action( 'admin_enqueue_scripts', 'mtabone_loadScripts' );
        add_action( 'admin_enqueue_scripts', 'mtabone_loadLibs' );
        add_action( 'admin_enqueue_scripts', 'mtabone_loadCss' );
    }
    //-----------------------------------<  

    // Panel Menu Admin----------------->
    function mtabone_createAdminPanel(){
        include( plugin_dir_path( __FILE__ ) . '/controllers/mtabone-controller-panel.php');
        add_action( 'admin_menu', 'mtabone_panel' );
    }
    //-----------------------------------<  

    // Managers ----------------------->
    function mtabone_loadControllers(){
        include( plugin_dir_path( __FILE__ ) . '/managers/mtabone-manage-content.php');
        include( plugin_dir_path( __FILE__ ) . '/managers/mtabone-manage-general.php');
        include( plugin_dir_path( __FILE__ ) . '/managers/mtabone-manage-settings.php');
    }
    //-----------------------------------<  

    // Shortcodes------------------------>
    function mtabone_loadShortcodes(){

    }
    //-----------------------------------<  

