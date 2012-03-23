<?php
class ZAgent extends HKLModel{

	public function __construct($t=null)
	{
		 parent::__construct($t);
	}
	public  function checkAgent($agentName){
		$this->setCondition(array('agent_name'=>$agentName),'id');
		$agent=$this->limitQuery();
		if($agent['id'])
		return true;
		else
		return false;
	}
	
	public  function getAgent($arr){
		$this->setCondition($arr);
		$agent=$this->limitQuery();
		return $agent;
	}

}
?>