<?php
    // LOAD SQLS ->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    require_once plugin_dir_path(__FILE__).'sqls/mtabone-manage-sqls.php';
    // ---------<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

    // Actions ->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    add_action( 'wp_ajax_mtabone_update_SettingsInfos', 'mtabone_update_SettingsInfos' );
    //wp_ajax_nopriv_my_action
    // ---------<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<


    function mtabone_update_SettingsInfos(){
        global $wpdb;
        $array = array('status' => 0,'msg' => '');

        $table_settings = $GLOBALS['mtabone_tableSettings'];

        $mtabone_infos = [
            mtabone_settingsName => sanitize_text_field($_POST['mtabone_update_settingsName']),
            mtabone_settingsEmail => sanitize_text_field($_POST['mtabone_update_settingsEmail'])
        ];

        $sql_update = mtabone_sql_update_settings($mtabone_infos);
        $q_update = $wpdb->query($sql_update);

        if($q_update){
            $array['status'] = 1;
            $array['msg'] = 'UPDATE Settings infos successfully';
            //$array['sql'] = $sql_update;
            wp_send_json($array);
        }else{
            $array['status'] = 0;
            $array['msg'] = 'ERROR IN UPDATE Settings infos';
            //$array['sql'] = $sql_update;
            wp_send_json($array);
        }
    }

    function mtabone_get_SettingsInfos(){
        Global $wpdb;
        $table_settings = $GLOBALS['mtabone_tableSettings'];
        $sql_get = "SELECT * FROM $table_settings";
        $query_get = $wpdb->get_results($sql_get);
        if($query_get != null){
            return $query_get;
        }else{
            return null;
        } 
    }