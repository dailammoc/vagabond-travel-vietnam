<?php
require_once (dirname(dirname(dirname(__FILE__))) . '/system/app.php');
if($_POST){
	$action = $_POST['action'];
	if($action == 'getIntro'){
		$intro_id = abs(intval($_POST['intro_id']));
		$intro = Table::Fetch('intro',$intro_id);
		//echo $intro_id;
		echo json_encode($intro);
	}
	
	if($action == 'lienhe'){
		$hoten = $_POST['hoten'];
		$email = $_POST['email'];
		$noidung = $_POST['noidung'];
		$now = time();
		$id = DB::Insert('lien_he', array('ho_ten'=>$hoten,'email'=>$email,'noi_dung'=>$noidung,'create_date' => $now));
		if($id > 0)
			echo "1";
	}
	if($action == 'lienhe_duhoc'){
		$hoten = $_POST['hoten'];
		$email = $_POST['email'];
		$diachi = $_POST['diachi'];
		$dienthoai = $_POST['dienthoai'];
		$noidung = $_POST['noidung'];
		$type = intval($_POST['type']);
		$now = time();
		if($type == 1)
			$type_ = 'My';
		else 
			$type_ = 'QuocTe';
		$id = db::Insert('du_hoc_lien_lac', array('ho_ten' => $hoten,'dia_chi' => $diachi,'email' => $email,'dien_thoai'=> $dienthoai,'content' => $noidung,'create_time' => $now,'type' => $type_));
		if($id > 0)
			echo "1";
		else 
			echo "0";
	}
	if($action == 'datvemaybay'){
		$hoten = $_POST['hoten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$loaidatve = $_POST['loaidatve'];
		$loaichieu = $_POST['loaichieu'];
		$diemkhoihanh = $_POST['diemkhoihanh'];
		$diemden = $_POST['diemden'];
		$ngaydi = strtotime($_POST['ngaydi']);
		$ngayve = strtotime($_POST['ngayve']);
		$giodukien_di = $_POST['giodukien_di'];
		$giodukien_den = $_POST['giodukien_den'];
		$now = time();
		if($loaidatve == 'trongnuoc'){
			if($loaichieu == 'haichieu')
				$id_loaidatve = 1;
			else
				$id_loaidatve = 2;
		}
		else{
			if($loaichieu == 'haichieu')
				$id_loaidatve = 3;
			else
				$id_loaidatve = 4;
		}
		$id = DB::Insert('ve_may_bay', array(
			'id_diem_khoi_hanh' =>$diemkhoihanh,
			'id_diem_den' => $diemden,
			'id_loai_ve_may_bay' =>$id_loaidatve,
			'ngay_di'=>$ngaydi,
			'ngay_ve' =>$ngayve,
			'gio_di' =>$giodukien_di,
			'gio_ve' =>$giodukien_den,
			'ho_ten' => $hoten,
			'dien_thoai' => $dienthoai,
			'email' => $email,
			'create_time' => $now
		));
		if($id > 0)
			echo "1";
		else 
			echo "0";
	}
	if($action == 'khuyenmai'){
		$email = $_POST['email'];
		$email_record = db::LimitQuery('thong_tin_khuyen_mai',array('condition' => array('email' => $email)));
		if(count($email_record) == 0){
			DB::Insert('thong_tin_khuyen_mai', array('email' => $email));
		}
		echo "1";
	}
	if($action == 'dattour'){
		$hoten = $_POST['hoten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$diachi = $_POST['diachi'];
		$tour_id = $_POST['tour_id'];
		$now = time();
		$id = DB::Insert('order_tour', array(
			'id_tour' => $tour_id,
			'ho_ten' => $hoten,
			'email' => $email,
			'dia_chi' => $diachi,
			'dien_thoai' => $dienthoai,
			'created_time' => $now
		));
		if($id > 0)
			echo "1";
		else 
			echo "0";
	}
}