<?php
class View {

	var $vars;
	var $template_path;
	var $section;
	var $module;
	var $debug = true;
	
	function View() {
		$this->vars = new stdClass();
	}
	
	function loadView($template_path, $template,$arr=null) {			
		$this->template_path = $template_path;
		include($this->template_path.$template);
	}
	
	function loadSection($template) {
		include($this->template_path.$template);
	}
	
	function setVar($key, $value) {
		$this->vars->$key = $value;
	}
	
	function getVar($key) {
		return $this->vars->$key;
	}
	
	function header() {
		include($this->template_path.'header.php');
	}
	
	function footer() {
		include($this->template_path.'footer.php');
	}
	
	function stylesheet() {
		return $this->document_root().'styles/style.css';
	}
	
	function document_root() {
		$path = str_replace($_SERVER['DOCUMENT_ROOT'], '', $this->template_path);
		if ($path{0} <> '/') {
			$path = '/'.$path;
		}
		return $path;
	}
	
	function dbg($array) {
		echo "<pre>\n";
		print_r($array);
		echo "\n</pre>\n";
	}
}
?>