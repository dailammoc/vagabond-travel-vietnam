<?php
class ZTemplate {
	var $template_path = 'template/';
	function ZTemplate() {		
	}
	function header($tab_name = null) {
		if($tab_name != null)
			include($this->template_path.'tab_temp_'.$tab_name.'.php');
		else 
			include($this->template_path.'header.php');
	}
	
	function footer() {
		include($this->template_path.'footer.php');
	}
}

?>