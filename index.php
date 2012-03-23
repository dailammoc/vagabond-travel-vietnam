<?php
require_once((dirname(__FILE__)) . '/system/app.php');
//require_once (dirname(dirname(__FILE__)) . '/partner/libs/lib/nusoap.php');
require_once(DIR_PARENT . '/system/app_travel.php');
include ("../include/phpcaptcha/securimage.php");
//require_once(dirname(dirname(__FILE__)) . '/htmlpurifier/library/HTMLPurifier.auto.php');
$URI=&load_class('Uri','core');
//print_r($URI);
$router = &load_class('Router','core');
//print_r($router);
$router->LoadZRouter($_SERVER['REQUEST_URI']);
//print_r($router);
include DIR_SYSTEM_CORE.'/Model.php';
include DIR_SYSTEM_CORE.'/LoadModel.php';
include DIR_SYSTEM_CORE.'/Controller.php';
include DIR_SYSTEM_CORE.'/Log.php';
function &get_instance()
{
	return HKL_Controller::get_instance();
}
//extend controller and include file function
//echo APPPATH.'config/config.php';
if(file_exists(APPPATH.'config/config.php'))
{
	//echo "123";
	include	APPPATH.'config/config.php';
	/*if (file_exists(APPPATH.'core/'.$config['subclass_name'].'_Controller.php'))
	{
		require APPPATH.'core/'.$config['subclass_name'].'_Controller.php';
	}*/
	if($config['function']!='')
	
	if (file_exists(APPPATH.'function/'.$config['function'].'.php'))
	{
		//echo APPPATH.'function/'.$config['function'].'.php';
		require APPPATH.'function/'.$config['function'].'.php';
	}
}
$class  = ucwords($router->fetch_class()).'_Controller';
$method = $router->fetch_method();
//echo APPPATH.'controllers/'.$router->fetch_directory().$router->fetch_class().'.php';
include(APPPATH.'controllers/'.$router->fetch_directory().$router->fetch_class().'.php');
$HKL = new $class();
if (method_exists($HKL, '_remap'))
{
	$HKL->_remap($method, array_slice($URI->rsegments, 2));
}
else
{
	call_user_func_array(array(&$HKL, $method), array_slice($URI->rsegments, 2));
}
?>