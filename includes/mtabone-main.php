<?php
    function mtabone_openDependencies(){
        mtabone_loadDefaultVariables();
        mtabone_inActivation();
        mtabone_loadResources();
        mtabone_createAdminPanel();
        mtabone_loadControllers();
        mtabone_loadShortcodes();
    }

    function mtabone_loadDefaultVariables(){
        include( plugin_dir_path( __FILE__ ) . '/mtabone_default.php');
        mtabone_createDefaultVars();
        // Language controller --------------->
        include( plugin_dir_path( __FILE__ ) . '/controllers/mtabone-controller-language.php');
        mtabone_controllerLanguage();
        //-----------------------------------<  
    }

    // Plugin Activation ---------------->
    function mtabone_inActivation(){

    }
    //-----------------------------------<  

    // LOADS CSS AND JS AND LIBS--------->
    function mtabone_loadResources(){

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

