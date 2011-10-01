jQuery(document).ready(function($){
    /**
     * Default ajax setup
     */
    $.ajaxSetup({
        type: "POST",
        url: ajax_url
    });
    
    // @todo templating still handled via php, consider js templating?
    function load_template( params ) {

        data = { 
            action: "get_tt_load_template",
            template: params.template            
        };

        $.ajax({
            data: data,
            success: function( msg ){
                $( params.target_div ).fadeIn().html( msg );
            }
        });    
    }
	
    $( '#get_tt_login_dialog' ).dialog({ 
        autoOpen: false,
        title: 'Please <em>Login in</em>',
        modal: true
    });	

    $('#get_tt_login_handle').click(function(){
    	
    	$('#get_tt_login_dialog').dialog('open');

        var params  = {};
        params.target_div = '#get_tt_login_dialog_target';
        params.template = $( this ).attr( 'data-template' );

        load_template( params );      	

    });

    /** @todo create [task]: needs to be part of class for dialog */
    $( '#network_login_form' ).live('submit', function(){
        $.ajax({
            data: "action=get_tt_login_submit&" + $(this).serialize(), 
            success: function( msg ){                
                location.reload( true );
            }
        });    
    });

})