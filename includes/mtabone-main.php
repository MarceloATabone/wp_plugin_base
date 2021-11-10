<?php

    function mtabone_openDependencies(){
        mtabone_loadDefaultVariables();
        mtabone_loadResources();
        mtabone_createAdminPanel();
        mtabone_loadControllers();
        mtabone_loadShortcodes();
    }

    // Create VARS & CHANGE Language ---->
    function mtabone_loadDefaultVariables(){
        include( plugin_dir_path( __FILE__ ) . '/mtabone_default.php');
        mtabone_createDefaultVars();
        // Language controller --------------->
        include( plugin_dir_path( __FILE__ ) . '/controllers/mtabone-controller-language.php');
        mtabone_controllerLanguage();
        //-----------------------------------<  
    }
    //-----------------------------------<  

    // LOADS CSS AND JS AND LIBS--------->
    function mtabone_loadResources(){
        include( plugin_dir_path( __FILE__ ) . '/controllers/mtabone-controller-scripts.php');
        add_action( 'admin_enqueue_scripts', 'mtabone_loadLibs' );
        add_action( 'admin_enqueue_scripts', 'mtabone_loadCss' );
        add_action( 'admin_enqueue_scripts', 'mtabone_loadScripts' );
    }
    //-----------------------------------<  

    // Panel Menu Admin----------------->
    function mtabone_createAdminPanel(){
        include( plugin_dir_path( __FILE__ ) . '/controllers/mtabone-controller-panel.php');
        mtabone_panel();
    }
    //-----------------------------------<  

    // Controllers----------------------->
    function mtabone_loadControllers(){

    }
    //-----------------------------------<  

    // Shortcodes------------------------>
    function mtabone_loadShortcodes(){

    }
    //-----------------------------------<  

