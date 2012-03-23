<?php
class HKLModel{
	public $conditon="";
	public $table_name = null;
	public $result="";
	private static $instance = null;

	public function __construct($t=null)
	{
		$this->table_name=$t;
	}

	public function setCondition($con,$sel=null,$one=true)
	{
		if(is_array($sel))
		{
			$sel=implode(',',$sel);
		}
		$this->conditon=array (
			'condition' => $con,
			'select'=>$sel,
			'one'=>$one
		);
	}

	public  function limitQuery(){
		$agent = DB::LimitQuery ($this->table_name,$this->conditon);
		return $agent;
	}

	public function get($table,$con)
	{
		$this->conditon=$con;
		$agent = DB::LimitQuery ($table,$this->conditon);
		return $agent;
	}
	function insert($table,$data) {
		$result=DB::Insert($table,$data);
		return $result;
	}

	function update($table,$id,$data=array()) {
		$result=Table::UpdateCache($table, $id, $data);
		return $result;
	}

	function delete($table,$where=array()) {
		$this->db->delete($table,$where);
		return $this->db->affected_rows();
	}

	//singleton method - avoids the creation of more than one instance
	public static function singleton() {
		//checks if there is an instance of class, if not, create it
		if (!isset(self::$instance))
		self::$instance = new CONFIGURATION;
		return self::$instance;
	}

}
?>