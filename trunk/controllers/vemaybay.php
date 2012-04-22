<?php
class Vemaybay_Controller extends HKL_Controller{

	var $vemaybayModel;
	public function __construct()
	{
		parent::__construct();
		$this->model->Model('Vemaybay_vemaybayModel');
		$this->vemaybayModel = new Vemaybay_Model();
	}
	public function index()
	{
		$_SESSION['sdt_travel_viendang'] = "08.3838.6969<br/>Ext:   115-246-244";
		$now = time();
		$diemkhoihanh = $this -> vemaybayModel -> getDiemKhoiHanh();
		$diemden = $this -> vemaybayModel -> getDiemDen();
		
		$banggia = $this -> vemaybayModel -> getBangGiaMayBay();
		$info_muavemaybay = $this -> vemaybayModel -> getInfoMuaVeMayBay();
		$info_quydinhhangkhong = $this -> vemaybayModel -> getInfoQuyDinhHangKhong();
		$info_truocchuyenbay = $this -> vemaybayModel -> getInfoQuyDinhHangKhong();
		include(DIR_VIEW_ENTERPRISE.'/vemaybay/vemaybay.html');
	}
}
?>