<?php
class ZRouter {
	var $module_path;
	var $segments = array();
	var $module = 'default';
	var $action = 'default';
	var $args = false;
	var $request;
	var $ignore = array();

	function ZRouter($request) {
		global $module_path;

		$this->request = $request;
		$url_array = explode('/', $this->request);
		$this->segments = array_filter($url_array);
		//print_r($this->segments);die();
		$this->module = $this->setModule();
		$this->ignore = array('Application', 'Views', 'Modules');
		$this->action = $this->setAction();
		$this->args = $this->setArgs();
		$this->module_path = $module_path.$this->module.'Module.php';
		//echo $this->module_path;
		if ($this->isExecuteable()) {
			if (!file_exists($this->module_path)) {
				Utility::Redirect(URL_HOME_ENTERPRISE.'/error/notfound');
			}
		}
	}

	function setModule() {
		if (count($this->segments) == 0) {
			return $this->module;
		}
		else {
			return $this->segments[2];
		}
	}

	function setAction() {
		if (count($this->segments) < 3) {
			return $this->action;
		}
		else {
			return $this->segments[3];
		}
	}

	function setArgs() {
		if (count($this->segments) > 3) {
			return $output = array_slice($this->segments, 3, count($this->segments));
		}
		else {
			return false;
		}
	}

	function isExecuteable() {
		if (in_array($this->module, $this->ignore)) {
			return false;
		}
		else {
			return true;
		}
	}

	function Execute() {
		if ($this->isExecuteable()) {
			require_once($this->module_path);
			$classname = $this->module.'Module';
			$module = new $classname($this->action, $this->args);
		}
	}
}
?>