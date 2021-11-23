
// FILL form mtabone_form_register_settings--->
jQuery("#mtabone_form_register_settings").ready(function() {
    var $ = jQuery;

    mtabone_jArray_settingsInfos = ( typeof mtabone_jArray_settingsInfos != 'undefined' && mtabone_jArray_settingsInfos instanceof Array ) ? mtabone_jArray_settingsInfos : []

    if(mtabone_jArray_settingsInfos != null){
        mtabone_jArray_settingsInfos.forEach(sInfos => {        
            $('input[name=mtabone_label_settings_name]').val(sInfos.settings_name);
            $('input[name=mtabone_label_settings_email]').val(sInfos.settings_email);
        });
    }
});
//--------------------------------------------<

// Submit form mtabone_form_register_settings->
jQuery('#mtabone_form_register_settings').on('submit',function(e){
    e.preventDefault();
    var $ = jQuery;
    
    $('#mtabone_submit_settingsInfos').attr('disabled','disabled');

    var form = {
        action: 'mtabone_update_SettingsInfos',
        mtabone_update_settingsName : $('#mtabone_label_settings_name').val(),
        mtabone_update_settingsEmail : $('#mtabone_label_settings_email').val()
    }

    var postAjax = $.post( wpa_data_manageSettings.admin_ajax, form, function() {
        //alert( "success" );
    }).done(function() {
        //alert("second success");
    }).fail(function() {
        //alert("error");
    }).always(function() {
        //alert("finished");
    });
    
    postAjax.always(function(json) {
        if(json.status != 0){
            console.log('Ok to register general infos');
            location.reload();
        }else{
            console.log('error to register general infos');
            console.log(json);
        }
        $('#mtabone_submit_settingsInfos').removeAttr('disabled');
    });
});
//--------------------------------------------<

