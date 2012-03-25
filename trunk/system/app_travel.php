<?php
define('URL_HOME_ENTERPRISE',URL_HOME);
define('DIR_ROOT_ENTERPRISE',DIR_PARENT);
define('DIR_TEMPLATE_ENTERPRISE',DIR_ROOT_ENTERPRISE.'/template');
define('APPPATH',DIR_PARENT.'/');
define('DIR_VIEW_ENTERPRISE',DIR_ROOT_ENTERPRISE.'/Views/');
define('DIR_CSS_ENTERPRISE',URL_HOME_ENTERPRISE.'/css/');
define('DIR_JS_ENTERPRISE',URL_HOME_ENTERPRISE.'/scripts/');
define('DIR_IMG_ENTERPRISE',URL_HOME_ENTERPRISE.'/images/');
define('DIR_AJAX_TRAVEL',URL_HOME_ENTERPRISE.'/function/ajax');
function is_loaded($class = '')
{
	static $_is_loaded = array();

	if ($class != '')
	{
		$_is_loaded[strtolower($class)] = $class;
	}

	return $_is_loaded;
}

function &load_class($class, $directory = 'core', $prefix = 'HKL_')
{//echo "123";
	static $_classes = array();
	//echo $class."</br>";
	//print_r($_classes[$class]);
	// Does the class exist?  If so, we're done...
	//echo "123";
	if (isset($_classes[$class]))
	{
		//echo "123"."</br>";
		//print_r($_classes[$class]);
		return $_classes[$class];
	}

	$name = FALSE;
	// Look for the class first in the local application/libraries folder
	// then in the native system/libraries folder
	//	foreach (array(APPPATH, BASEPATH) as $path)
	//{
	//echo APPPATH.$directory.'/'.$class.'.php'."</br>";
	//echo "123";
	if (file_exists(APPPATH.$directory.'/'.$class.'.php'))
	{
		$name = $prefix.$class;
		
		if (class_exists($name) === FALSE)
		{
			require(APPPATH.$directory.'/'.$class.'.php');
			
		}

		//break;
	}
	//	}
	//echo "123";
	//echo DIR_SYSTEM_CORE.'/'.$class.'.php'."</br>";
	if (file_exists(DIR_SYSTEM_CORE.'/'.$class.'.php'))
	{
		//echo "123";
		$name = $prefix.$class;
		if (class_exists($name) === FALSE)
		{
			require(DIR_SYSTEM_CORE.'/'.$class.'.php');
		}

		//break;
	}

	// Keep track of what we just loaded
	is_loaded($class);
	//echo $name;
	$_classes[$class] = new $name();
	//print_r($_classes[$class]);
	return $_classes[$class];
}

/*function autoloadEnterprise($class_name) {
	$file_name=strpos($class_name, 'Model');
	$file_name=substr($class_name, 0,$file_name);
	$file_model=$file_name.'.php';
	$file_path = APPPATH. '/models/' . $file_model;
	if ( file_exists( $file_path ) ) {
		return require_once( $file_path );
	}
	return false;
}
spl_autoload_register('autoloadEnterprise');*/

//autoload extend core 
//echo "123";

function __autoload($class)
{
 if(strpos($class, 'HKL_') !== 0)
 {
  //echo APPPATH . 'core/'. $class .'.php';
 	@include_once( APPPATH . 'core/'. $class .'.php' );
 }
}
?>