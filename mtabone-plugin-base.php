<?php
    /**
    * Plugin Name: TabonePlugins - Plugin Base
    * Plugin URI: https://github.com/MarceloATabone/wp_plugin_base
    * Description: Base code to start creating wordpress plugin
    * Version: 1.0
    * Author: Marcelo Andrade Tabone
    * Author URI: matabone.com
    **/

    // Exit plugin if accessed directly
    if(!function_exists('add_action')){
        echo "Cannot be accessed directly";
        exit;
    }
    //---------------------------------

    // Plugin Activation ---------------->
    require_once plugin_dir_path(__FILE__).'/includes/controllers/mtabone-controller-activation.php';
    register_activation_hook(__FILE__, 'mtabone_activationPlugin');
    //-----------------------------------<  

    // Plugin MAIN----------------------->
    include( plugin_dir_path(__FILE__) . '/includes/mtabone-main.php' );
    add_action('admin_menu', 'mtabone_openDependencies');
    //-----------------------------------<  
