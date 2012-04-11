/**
 * 
 */
$(document).ready(function(){
	$('#submit-login').click(function(){
		if($('#user_name').val() == 'admin' && $('#password').val() == 'admin')
			window.location = "admin/dichvu";
	});
});

function intro(intro_id){
	$('.basic-modal-content').modal({minWidth: 870,minHeight:500,overlayClose:true});
	$('.basic-modal-content').load(URL_HOME_ENTERPRISE + '/Views/admin/intro/add.php?intro_id='+intro_id);
}