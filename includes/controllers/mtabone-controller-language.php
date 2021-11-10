<?php
    function mtabone_controllerLanguage(){
        $lang = get_locale();
        if ( strlen( $lang ) > 0 ) {
            $lang = explode( '_', $lang )[0];
        }
        //to site default language
        switch ($lang) {
            case 'en':
                include( plugin_dir_path( __FILE__ ).'../languages/mtabone-language-en.php');
                break;
            case 'pt':
                include( plugin_dir_path( __FILE__ ).'../languages/mtabone-language-pt-br.php');
                break;
            default:
                include( plugin_dir_path( __FILE__ ).'../languages/mtabone-language-en.php');
                break;
        }
    }