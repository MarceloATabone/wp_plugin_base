<?php
    function mtabone_openDependencies(){
        mtabone_inActivation();
        mtabone_loadResources();
        mtabone_createAdminPainel();
        mtabone_loadControllers();
        mtabone_loadShortcodes();
    }

    // Plugin Activation----------------->
    function mtabone_inActivation(){

    }
    //-----------------------------------<  

    // LOADS CSS AND JS AND LIBS--------->
    function mtabone_loadResources(){

    }
    //-----------------------------------<  

    // Painel Menu Admin----------------->
    function mtabone_createAdminPainel(){
        include( plugin_dir_path( __FILE__ ) . '/controllers/mtabone-controller-painel.php');
        mtabone_painel();
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

