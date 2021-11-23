<?php

    function mtabone_sql_update_settings($infos){
        $mtabone_sql_update = "UPDATE ".$GLOBALS['mtabone_tableSettings']." SET ";
        $mtabone_sql_update .= $GLOBALS['mtabone_settings_columnName']." = '".$infos['mtabone_settingsName']."',";
        $mtabone_sql_update .= $GLOBALS['mtabone_settings_columnEmail']." = '".$infos['mtabone_settingsEmail']."'";
        $mtabone_sql_update .= " WHERE ".$GLOBALS['mtabone_settings_columnID']." = 1; ";

        return $mtabone_sql_update;
    }