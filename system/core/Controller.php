<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * HKL Application Controller Class
 *
 * This class object is the super class that every library in
 * HKL will be assigned to.
 *
 * @package		HKL
 * @category	class
 * @author		51deal Dev Team
 */
class HKL_Controller {

	private static $instance;

	/**
	 * Constructor
	 */
	var $uri;
	var $load;
	public function __construct()
	{
		self::$instance =& $this;
		foreach (is_loaded() as $var => $class)
		{
			$this->$var =& load_class($class);
		}
		$this->load =& load_class('Loader', 'core');
	
		$this->model= new LoadModel();
		$this->model->setDir(DIR_ROOT_ENTERPRISE);
		//$this->load->initialize();
	}

	public static function &get_instance()
	{
		return self::$instance;
	}
	
	public  function Ini()
	{
		global $INI;
		return $INI;
	}	
	
	public function view($tpl)
	{
		include(DIR_VIEW_ENTERPRISE.'/'.$tpl.'.php');
	}
	
}
// END Controller class

/* End of file Controller.php */
