/**
 * 
 */
$(document).ready(function(){
	$('#submit-login').click(function(){
		if($('#user_name').val() == 'admin' && $('#password').val() == 'admin')
			window.location = "admin/intro";
	});
});

function intro(intro_id){
	$('.basic-modal-content').modal({minWidth: 700,minHeight:500,overlayClose:true});
	$('.basic-modal-content').load(URL_HOME_ENTERPRISE + '/Views/admin/intro/add.php?intro_id='+intro_id);
}
function add_loaitour(tour_id){
	$('.basic-modal-content').modal({minWidth: 700,minHeight:500,overlayClose:true});
	$('.basic-modal-content').load(URL_HOME_ENTERPRISE + '/Views/admin/tour/add_loaitour.php?tour_id='+tour_id);
}
function add_phuongtien(phuongtien_id){
	$('.basic-modal-content').modal({minWidth: 700,minHeight:500,overlayClose:true});
	$('.basic-modal-content').load(URL_HOME_ENTERPRISE + '/Views/admin/tour/add_phuongtien.php?phuongtien_id='+phuongtien_id);
}
function add_diem(loai,loai_diem_id){
	$('.basic-modal-content').modal({minWidth: 700,minHeight:500,overlayClose:true});
	$('.basic-modal-content').load(URL_HOME_ENTERPRISE + '/Views/admin/tour/add_diem.php?loai='+loai+'&loai_diem_id='+loai_diem_id);
}
function add_loai_dichvu(loaidichvu_id){
	$('.basic-modal-content').modal({minWidth: 400,minHeight:100,overlayClose:true});
	$('.basic-modal-content').load(URL_HOME_ENTERPRISE + '/Views/admin/dichvu/add_loai_dichvu.php?loaidichvu_id='+loaidichvu_id);
}
function add_faq(faq_id){
	$('.basic-modal-content').modal({minWidth: 500,minHeight:430,overlayClose:true});
	$('.basic-modal-content').load(URL_HOME_ENTERPRISE + '/Views/admin/duhoc/add_faq.php?faq_id='+faq_id);
}
function add_link(faq_id){
	$('.basic-modal-content').modal({minWidth: 500,minHeight:230,overlayClose:true});
	$('.basic-modal-content').load(URL_HOME_ENTERPRISE + '/Views/admin/duhoc/add_link.php?faq_id='+faq_id);
}
function add_news(faq_id){
	$('.basic-modal-content').modal({minWidth: 500,minHeight:230,overlayClose:true});
	$('.basic-modal-content').load(URL_HOME_ENTERPRISE + '/Views/admin/duhoc/add_news.php?faq_id='+faq_id);
}
function detail_tour(tour_id){
	$('.basic-modal-content').modal({minWidth: 700,minHeight:500,overlayClose:true});
	$('.basic-modal-content').load(URL_HOME_ENTERPRISE + '/Views/admin/tour/tour_detail.php?tour_id='+tour_id);
}
function delete_record(type_,record_id_){
	name = confirm ("Bạn Có Chắc Chắn Xóa ?");
	if(name){
		$.ajax({
			type:"POST",
			url : DIR_AJAX_TRAVEL + "/actionAjaxAdmin.php",
			data:{
				action : "delete",
				record_id : record_id_,
				type : type_
			},
			success:function(respond){
				if(respond == 1)
					alert("Xóa hành công");
				else
					alert("Xóa thất bại");
			}		
		});
	}
}
function delete_muti(type_){
	//var obj = jQuery.parseJSON('{"test":"John"}');
	name = confirm ("Bạn Có Chắc Chắn Xóa ?");
	if(name){
		//var arr_id = new Array();
		arr_id = '';
		$.each($('#mainform input[type=checkbox]'),function(){ 
		    if($(this).is(':checked')){
		    	arr_id += $(this).val() + ',';
		    	//alert($(this).val());
		    }

		});
		$.ajax({
			type:"POST",
			url : DIR_AJAX_TRAVEL + "/actionAjaxAdmin.php",
			data:{
				action : "delete",
				record_id : arr_id,
				type : type_
			},
			success:function(respond){
				if(respond == 1)
					alert("Xóa thành công");
				else
					alert("Xóa thất bại");
			}		
		});
	}
}
function delete_muti(type_){
	//var obj = jQuery.parseJSON('{"test":"John"}');
	name = confirm ("Bạn Có Chắc Chắn Xóa ?");
	if(name){
		//var arr_id = new Array();
		arr_id = '';
		$.each($('#mainform input[type=checkbox]'),function(){ 
		    if($(this).is(':checked')){
		    	arr_id += $(this).val() + ',';
		    	//alert($(this).val());
		    }

		});
		$.ajax({
			type:"POST",
			url : DIR_AJAX_TRAVEL + "/actionAjaxAdmin.php",
			data:{
				action : "delete",
				record_id : arr_id,
				type : type_
			},
			success:function(respond){
				if(respond == 1)
					alert("Xóa thành công");
				else
					alert("Xóa thất bại");
			}		
		});
	}
}
function edit(intro_id_){
	if(parseInt(intro_id_) > 0)
		action_ = "edit";
	else
		action_ = "add";
	$.ajax({
		type:"POST",
		url : DIR_AJAX_TRAVEL + "/actionAjaxAdmin.php",
		data:{
			action : action_,
			intro_id : intro_id_,
			hoten : $('#hoten_order').val(),
			email : $('#email_order').val(),
			dienthoai : $('#dienthoai_order').val(),
			tour_id : $('#tour_id_hidden').val(),
		},
		success:function(respond){
			if(respond == 1)
				alert("Đặt vé thành công - Xin cảm ơn bạn");
			else
				alert("Đặt vé thất bại - Mời thử lại");
		}		
	});
}
$(document).ready(function(){
	var pathnames = window.location.pathname;
	var filename = pathnames.substring(pathnames.lastIndexOf('/')+1);
	switch (filename)
	{
	
	case 'intro':
		
		$('.table .select:eq(0)').addClass('current');
		$('.table .select:eq(0)').removeClass('select');
		break;
		
	case 'dichvu':
		$('.table .select:eq(1)').addClass('current');
		$('.table .select:eq(1)').removeClass('select');
		break;
	case 'tour':
		$('.table .select:eq(2)').addClass('current');
		$('.table .select:eq(2)').removeClass('select');
		break;
	case 'vemaybay':
		$('.menuT ul li:eq(0) a').removeClass('active');
		$('.categories ul li:eq(3) a').addClass('active');
		break;
	case 'dichvu':
		$('.menuT ul li:eq(0) a').removeClass('active');
		$('.categories ul li:eq(4) a').addClass('active');
		break;
	case 'nhatky':
		$('.menuT ul li:eq(0) a').removeClass('active');
		$('.categories ul li:eq(5) a').addClass('active');
		break;
	case 'gioithieu':
		$('.menuT ul li:eq(0) a').removeClass('active');
		$('.menuT ul li:eq(1) a').addClass('active');
		break;
	case 'lienhe':
		$('.menuT ul li:eq(0) a').removeClass('active');
		$('.menuT ul li:eq(2) a').addClass('active');
		break;
	};
});