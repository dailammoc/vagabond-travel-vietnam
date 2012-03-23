<?php
class LoadModel extends Zend{
	
	var $dir ='';

	public function setDir($dir){
		$this->dir = $dir;
	}

	public function Model($class){
		$urlModel=$this->dir.'/models';
		return $this->load($class,$urlModel);
	}

}
?>