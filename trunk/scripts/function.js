/**
 * 
 */
$(function () {
	
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
	});
});