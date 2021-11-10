<?php

    function mtabone_loadLibs(){
        //wp_register_script( 'mtabone_bootstrap_lib', plugins_url( '../../includes/libs/bootstrap/bootstrap.js', __FILE__ ),array('jquery'),false,true );
        //wp_enqueue_script( 'mtabone_bootstrap_lib');
    }
    function mtabone_loadCss() {
        wp_enqueue_style('mtabone-style-css', plugins_url('../css/mtabone-style.css', __FILE__));
    }
    function mtabone_loadScripts() {

    }
