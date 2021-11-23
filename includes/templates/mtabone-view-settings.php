<?php
    $mtabone_settingsInfos = mtabone_get_SettingsInfos();
    echo "<script type='text/javascript'> var mtabone_jArray_settingsInfos = ".json_encode($mtabone_settingsInfos)."; </script>";
?>

<div class='wrap'>
    <div class='mtabone_painel_title'>
        <h1><?php echo $GLOBALS['mtabone_panel_title_settings'] ; ?></h1>
    </div>
    <div>
        <form method="post" id="mtabone_form_register_settings" class="mtabone_card">
            <h2>
                <?php echo $GLOBALS['mtabone_settings_information'] ; ?>
            </h2>
            <table class="">
                <body>
                    <tr>
                        <th>
                            <label for="mtabone_label_settings_name"><?php echo $GLOBALS['mtabone_settings_name'] ; ?> : </label>
                        </th>
                        <td>
                            <input required type="text" name="mtabone_label_settings_name" id="mtabone_label_settings_name" value class="regular-text" placeholder= '<?php echo $GLOBALS['mtabone_settings_name_placeholder'] ; ?>' >
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="mtabone_label_settings_email"><?php echo $GLOBALS['mtabone_settings_email'] ; ?> : </label>
                        </th>
                        <td>
                            <input required type="email" name="mtabone_label_settings_email" id="mtabone_label_settings_email" value class="regular-text" placeholder= '<?php echo $GLOBALS['mtabone_settings_email_placeholder'] ; ?>' >
                        </td>
                    </tr>
                </body>
            </table>
            <input type="submit" name="mtabone_submit_settingsInfos" id="mtabone_submit_settingsInfos" class="button button-primary" value = '<?php echo $GLOBALS['mtabone_var_updateData'] ; ?>' >
            <br><br>
        </form>
    </div>
</div>