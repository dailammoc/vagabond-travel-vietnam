<?php
class HKL_Loader{
	/**
	 * Nesting level of the output buffering mechanism
	 *
	 * @var int
	 * @access protected
	 */
	protected $_ci_ob_level;
	/**
	 * List of paths to load views from
	 *
	 * @var array
	 * @access protected
	 */
	protected $_ci_view_paths		= array();
	/**
	 * List of paths to load libraries from
	 *
	 * @var array
	 * @access protected
	 */
	protected $_ci_library_paths	= array();
	/**
	 * List of paths to load models from
	 *
	 * @var array
	 * @access protected
	 */
	protected $_ci_model_paths		= array();
	/**
	 * List of paths to load helpers from
	 *
	 * @var array
	 * @access protected
	 */
	protected $_ci_helper_paths		= array();
	/**
	 * List of loaded base classes
	 * Set by the controller class
	 *
	 * @var array
	 * @access protected
	 */
	protected $_base_classes		= array(); // Set by the controller class
	/**
	 * List of cached variables
	 *
	 * @var array
	 * @access protected
	 */
	protected $_ci_cached_vars		= array();
	/**
	 * List of loaded classes
	 *
	 * @var array
	 * @access protected
	 */
	protected $_ci_classes			= array();
	/**
	 * List of loaded files
	 *
	 * @var array
	 * @access protected
	 */
	protected $_ci_loaded_files		= array();
	/**
	 * List of loaded models
	 *
	 * @var array
	 * @access protected
	 */
	protected $_ci_models			= array();
	/**
	 * List of loaded helpers
	 *
	 * @var array
	 * @access protected
	 */
	protected $_ci_helpers			= array();

	/**
	 * Constructor
	 *
	 * Sets the path to the view files and gets the initial output buffering level
	 */
	public function __construct()
	{

		$this->_ci_ob_level  = ob_get_level();
		$this->_ci_library_paths = array(APPPATH, BASEPATH);
		$this->_ci_helper_paths = array(APPPATH, BASEPATH);
		$this->_ci_model_paths = array(APPPATH);
		$this->_ci_view_paths = array(APPPATH.'Views/'	=> TRUE);

		//log_message('debug', "Loader Class Initialized");
	}


	/**
	 * Set Variables
	 *
	 * Once variables are set they become available within
	 * the controller class and its "view" files.
	 *
	 * @param	array
	 * @param 	string
	 * @return	void
	 */
	public function vars($vars = array(), $val = '')
	{
		if ($val != '' AND is_string($vars))
		{
			$vars = array($vars => $val);
		}

		$vars = $this->_ci_object_to_array($vars);

		if (is_array($vars) AND count($vars) > 0)
		{
			foreach ($vars as $key => $val)
			{
				$this->_ci_cached_vars[$key] = $val;
			}
		}
	}

	/**
	 * Object to Array
	 *
	 * Takes an object as input and converts the class variables to array key/vals
	 *
	 * @param	object
	 * @return	array
	 */
	protected function _ci_object_to_array($object)
	{
		return (is_object($object)) ? get_object_vars($object) : $object;
	}

	/**
	 * Load View
	 *
	 * This function is used to load a "view" file.  It has three parameters:
	 *
	 * 1. The name of the "view" file to be included.
	 * 2. An associative array of data to be extracted for use in the view.
	 * 3. TRUE/FALSE - whether to return the data or load it.  In
	 * some cases it's advantageous to be able to return data so that
	 * a developer can process it in some way.
	 *
	 * @param	string
	 * @param	array
	 * @param	bool
	 * @return	void
	 */
	public function view($view, $vars = array(), $return = FALSE)
	{

		return $this->_ci_load(array('_ci_view' => $view, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
	}

	/**
	 * Loader
	 *
	 * This function is used to load views and files.
	 * Variables are prefixed with _ci_ to avoid symbol collision with
	 * variables made available to view files
	 *
	 * @param	array
	 * @return	void
	 */
	protected function _ci_load($_ci_data)
	{
		// Set the default data variables
		global $INI;
		foreach (array('_ci_view', '_ci_vars', '_ci_path', '_ci_return') as $_ci_val)
		{
			$$_ci_val = ( ! isset($_ci_data[$_ci_val])) ? FALSE : $_ci_data[$_ci_val];
		}

		$file_exists = FALSE;

		// Set the path to the requested file
		if ($_ci_path != '')
		{
			$_ci_x = explode('/', $_ci_path);
			$_ci_file = end($_ci_x);
		}
		else
		{
			$_ci_ext = pathinfo($_ci_view, PATHINFO_EXTENSION);
			$_ci_file = ($_ci_ext == '') ? $_ci_view.'.php' : $_ci_view;

			foreach ($this->_ci_view_paths as $view_file => $cascade)
			{
				if (file_exists($view_file.$_ci_file))
				{
					$_ci_path = $view_file.$_ci_file;
					$file_exists = TRUE;
					break;
				}

				if ( ! $cascade)
				{
					break;
				}
			}
		}

		if ( ! $file_exists && ! file_exists($_ci_path))
		{
			die('Unable to load the requested file: '.$_ci_file);
		}

		// This allows anything loaded using $this->load (views, files, etc.)
		// to become accessible from within the Controller and Model functions.

		$_ci_CI =& get_instance();
		foreach (get_object_vars($_ci_CI) as $_ci_key => $_ci_var)
		{
			if ( ! isset($this->$_ci_key))
			{
				$this->$_ci_key =& $_ci_CI->$_ci_key;
			}
		}

		/*
		 * Extract and cache variables
		 *
		 * You can either set variables using the dedicated $this->load_vars()
		 * function or via the second parameter of this function. We'll merge
		 * the two types and cache them so that views that are embedded within
		 * other views can have access to these variables.
		 */
		if (is_array($_ci_vars))
		{
			$this->_ci_cached_vars = array_merge($this->_ci_cached_vars, $_ci_vars);
		}
		extract($this->_ci_cached_vars);

		/*
		 * Buffer the output
		 *
		 * We buffer the output for two reasons:
		 * 1. Speed. You get a significant speed boost.
		 * 2. So that the final rendered template can be
		 * post-processed by the output class.  Why do we
		 * need post processing?  For one thing, in order to
		 * show the elapsed page load time.  Unless we
		 * can intercept the content right before it's sent to
		 * the browser and then stop the timer it won't be accurate.
		 */
		ob_start();

		// If the PHP installation does not support short tags we'll
		// do a little string replacement, changing the short tags
		// to standard PHP echo statements.

		/*if ((bool) @ini_get('short_open_tag') === FALSE AND config_item('rewrite_short_tags') == TRUE)
		{
			echo eval('?>'.preg_replace("/;*\s*\?>/", "; ?>", str_replace('<?=', '<?php echo ', file_get_contents($_ci_path))));
		}
		else*/
		{
			include($_ci_path); // include() vs include_once() allows for multiple views with the same name
		}

	}

	// --------------------------------------------------------------------
	/**
	 * Model Loader
	 *
	 * This function lets users load and instantiate models.
	 *
	 * @param	string	the name of the class
	 * @param	string	name for the model
	 * @param	bool	database connection
	 * @return	void
	 */
	public function model($model, $name = '', $db_conn = FALSE)
	{
		if (is_array($model))
		{
			foreach ($model as $babe)
			{
				$this->model($babe);
			}
			return;
		}

		if ($model == '')
		{
			return;
		}

		$path = '';

		// Is the model in a sub-folder? If so, parse out the filename and path.
		if (($last_slash = strrpos($model, '/')) !== FALSE)
		{
			// The path is in front of the last slash
			$path = substr($model, 0, $last_slash + 1);

			// And the model name behind it
			$model = substr($model, $last_slash + 1);
		}

		if ($name == '')
		{
			$name = $model;
		}

		if (in_array($name, $this->_ci_models, TRUE))
		{
			return;
		}

		$HKL =& get_instance();
		if (isset($HKL->$name))
		{
			die('The model name you are loading is the name of a resource that is already being used: '.$name);
		}

		$model = strtolower($model);

		foreach ($this->_ci_model_paths as $mod_path)
		{
			if ( ! file_exists($mod_path.'models/'.$path.$model.'.php'))
			{
				continue;
			}

				

			if ( ! class_exists('CI_Model'))
			{
				load_class('Model', 'core');
			}

			require_once($mod_path.'models/'.$path.$model.'.php');

			$model = ucfirst($model);

			$HKL->$name = new $model();

			$this->_ci_models[] = $name;
			return;
		}

		// couldn't find the model
		die('Unable to locate the model you have specified: '.$model);
	}

	/**
	 * Load Helper
	 *
	 * This function loads the specified helper file.
	 *
	 * @param	mixed
	 * @return	void
	 */
	public function helper($helpers = array())
	{
		foreach ($helpers as $helper)
		{
			$ext_helper = APPPATH.'helpers/'.$helper.'.php';
			// Is this a helper extension request?
			if (file_exists($ext_helper))
			{
				
				include_once($ext_helper);
					
			}
			else
			{
				die('Unable to load the requested file: helpers/'.$helper.'.php');
			}

		}
	}
}
?>