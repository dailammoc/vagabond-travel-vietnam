/**
 * 
 */
$(document).ready(function(){
	$('#submit-login').click(function(){
		if($('#user_name').val() == 'admin' && $('#password').val() == 'admin')
			window.location = "admin/dichvu";
	});
});

function add_intro(){
	$string = "<tr><td><input  type='checkbox'/></td>" +
			"<td></td>"+
			"<td><input type='text' class='inp-form-error'></td>" +
			"<td><input type='file'></td>" +
			"<td><input type='text' class='inp-form-error'></td>" +
			"<td><input type='text' class='inp-form-error'></td>" +
			"<td><input type='file'></td>" +
			"<td><input type='file'></td>" +
			"<td><input type='file'></td>" +
			"</tr>";
	$('#product-table').append($string);
}