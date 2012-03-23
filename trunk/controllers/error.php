<?php
class Error_Controller extends HKL_Controller{
	
	public function index(){
		$this->load->view('error/html_error.php');
	}
	
	public function errorRegister(){
		$data = array('error'=>'Xin lỗi bạn đã hết thời gian đăng ký');
		$this->load->view('error/html_error.php',$data);
	}
	
	public function errorLogin()
	{
		$data=array('error'=>'Xin lỗi,tài khoản doanh nghiệp của bạn chưa được kích hoạt');
		$this->load->view('error/html_error.php',$data);
	}
	
	public function errorVote()
	{
		$data=array('error'=>Session::Get('errorVote',true));
		$this->load->view('error/html_error.php',$data);
	}
	
}
?>