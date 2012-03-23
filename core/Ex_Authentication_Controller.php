<?php
class Ex_Authentication_Controller extends HKL_Controller{

	var $enterprise_id;

	/**
	 * Check user login for enterprise
	 *
	 * @access	public
	 * @return	void
	 */
	public function __construct(){
		echo "123";
		$INI=$this->Ini();
		if(!isset($_SESSION['enterprise_id']))
		{

			Utility::Redirect(URL_HOME_ENTERPRISE.'/user/login');
		}
		else
		{
			$this->enterprise_id =intval($_SESSION['enterprise_id']);

		}
		parent::__construct();
	}


	public function _remap($method, $params = array())
	{

	 // Remap all the functions but allow for params to index
		if (method_exists($this, $method)) {
			return call_user_func_array(array($this, $method), $params);
		} else {
			array_unshift($params, $method);
			return call_user_func_array(array($this, "index"), $params);
		}
	}

	

}
?>