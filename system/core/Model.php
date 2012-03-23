<?php
/**
 * HKL
 *
 *
 * @package		HKL
 * @author		51deal Dev Team
 * @copyright	Copyright (c) 2011 - 2012, EllisLab, Inc.
 * @license		http://51deal.vn
 * @link		http://51deal.vn
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * HKL Model Class
 *
 * @package		HKL
 * @subpackage	Core
 * @category	Core
 * @author		51deal Dev Team
 * @link		http://51deal.vn
 */
class HKL_Model {
	
	protected  function fetchOne($table,$condition,$select='*',$order='',$size='',$offset=''){
		
		if(is_array($select)){
			$select=implode(',',$select);
		}

		if(is_array($order)){
			$order=implode(',',$order);
		}
	
		$result=DB::LimitQuery($table, array(
					'condition' => $condition,
					'select'=>$select,
					'size'=>$size,
					'offset'=>$offset,
					'order'=>'order by '.$order,
					'one' => true,
		));
		return $result;

	}
	
	protected function fetchAll($table,$condition,$select='*',$order='',$size='',$offset=''){
		
		if(is_array($select)){
			$select=implode(',',$select);
		}

		if(is_array($order)){
			$order=implode(',',$order);
		}
	
		$result=DB::LimitQuery($table, array(
					'condition' => $condition,
					'select'=>$select,
					'size'=>$size,
					'offset'=>$offset,
					'order'=>'order by '.$order,
		));
		return $result;

	}

	
}
// END Model Class

/* End of file Model.php */
