//$(function () {
$(document).ready(function(){
	//////intro.html
	$(".picThumb a").bind('click mouseenter',function(){
		$.ajax({
			type:"POST",
			url : DIR_AJAX_TRAVEL + "/actionAjax.php",
			dataType:'json',
			data:{
				action : "getIntro",
				intro_id: parseInt($(this).attr('id'))
			},
			success:function(respond){
				if(respond.hide == 0){
					$('.boxInfoPic').show();
					$('#rotation05').attr('src',respond.hinh_1);
					$('#rotation04').attr('src',respond.hinh_2);
					$('#rotation03').attr('src',respond.hinh_3);
					$('#rotation02').attr('src',respond.hinh_dai_dien);
					$('#title').text(respond.title);
					$('#intro').text(respond.gioi_thieu);
				}
	     }
		});	
	});
	
	////lienhe.html
	
	$('#lienhe_submit').click(function(){
		if($('#hoten').val() == '')
			alert("Bạn Chưa Nhập Họ Tên");
		else if($('#email').val() == '')
			alert("Bạn Chưa Nhập Email");
		else if($('#noidung').val() == '')
			alert("Bạn Chưa Nhập Nội Dung");
		else{
			$.ajax({
				type:"POST",
				url : DIR_AJAX_TRAVEL + "/actionAjax.php",
				data:{
					action : "lienhe",
					hoten : $('#hoten').val(),
					email : $('#email').val(),
					noidung : $('#noidung').val(),
				},
				success:function(respond){
					if(respond == 1)
						alert("Xin cảm ơn bạn");					
				}		
			});
		}
	});
	
	////datvemaybay.html
	$('#datvemaybay_submit').click(function(){
		if($('#hoten').val() == '')
			alert("Bạn Chưa Nhập Họ Tên");
		else if($('#email').val() == '')
			alert("Bạn Chưa Nhập Email");
		else if($('#dienthoai').val() == '')
			alert("Bạn Chưa Nhập Điện Thoại");
		else{
			if($("#trongnuoc").attr('checked') == true)
				loaive = 'trongnuoc';
			else
				loaive = 'quocte';
			
			if($("#motchieu").attr('checked') == true)
				sochieu = 'motchieu';
			else
				sochieu = 'haichieu';
			var name = confirm("Bạn có chắc chắn đặt vé");
			if(name){
				$.ajax({
					type:"POST",
					url : DIR_AJAX_TRAVEL + "/actionAjax.php",
					data:{
						action : "datvemaybay",
						hoten : $('#hoten').val(),
						email : $('#email').val(),
						dienthoai : $('#dienthoai').val(),
						loaidatve : loaive,
						loaichieu : sochieu,
						diemkhoihanh : $("#diemkhoihanh").val(),
						diemden : $("#diemden").val(),
						ngaydi :$("#ngaydi").val(),
						ngayve : $("#ngayve").val(),
						giodukien_di : $('#giodukien_di').val(),
						giodukien_den : $('#giodukien_den').val()
					},
					success:function(respond){
						if(respond == 1)
							alert("Đặt vé thành công - Xin cảm ơn bạn");
						else
							alert("Đặt vé thất bại - Mời thử lại");
					}		
				});
			}
		}
	});
	
	//////////search tour
	$('#search_tour_submit').click(function(){
		diemkhoihanh = $('#search_diemkhoihanh').val();
		diemden = $('#search_diemden').val();
		location.href=URL_HOME_ENTERPRISE+"/tour/search/"+diemkhoihanh+"/"+diemden;
	})
	/////email khuyen mai
	$('#email_km_submit').click(function(){
		$.ajax({
			type:"POST",
			url : DIR_AJAX_TRAVEL + "/actionAjax.php",
			data:{
				action : "khuyenmai",				
				email : $('#email_km').val(),
			},
			success:function(respond){
				if(respond == 1)
					alert("Xin cảm ơn bạn");					
			}		
		});
	});
	
	////dat tour
	$('#order_tour_submit').click(function(){
		if($('#hoten_order').val() == '')
			alert("Bạn Chưa Nhập Họ Tên");
		else if($('#email_order').val() == '')
			alert("Bạn Chưa Nhập Email");
		else if($('#dienthoai_order').val() == '')
			alert("Bạn Chưa Nhập Điện Thoại");
		else{
			var name = confirm("Bạn có chắc chắn đặt vé");
			if(name){
				$.ajax({
					type:"POST",
					url : DIR_AJAX_TRAVEL + "/actionAjax.php",
					data:{
						action : "dattour",
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
		}
	});
	
	////////menu
	var pathnames = window.location.pathname;
	var filename = pathnames.substring(pathnames.lastIndexOf('/')+1);
	switch (filename)
	{
	case 'nuocngoai':
		$('.menuT ul li:eq(0) a').removeClass('active');
		$('.categories ul li:eq(0) a').addClass('active');
		break;
		
	case 'trongnuoc':
		$('.menuT ul li:eq(0) a').removeClass('active');
		$('.categories ul li:eq(1) a').addClass('active');
		break;
	case 'duhoc':
		$('.menuT ul li:eq(0) a').removeClass('active');
		$('.categories ul li:eq(2) a').addClass('active');
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
//////////////modal form footer.html
function order_tour(tour_id){
	$('.basic-modal-content').modal({minWidth: 870,overlayClose:true});
	$('.basic-modal-content').load(URL_HOME_ENTERPRISE + '/Views/tour/order_tour.php?tour_id='+tour_id);
}