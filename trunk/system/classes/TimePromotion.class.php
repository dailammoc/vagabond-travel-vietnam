<?php
class TimePromotion {

	static public function checkUser($promotion_id,$user_id)
	{
		$promotion=DB::LimitJoinQuery('confirm_time_promotion','promotion',array(
			'on'=>'promotion.id=confirm_time_promotion.promotion_id',
			'condition'=>array(
				'type_ad'=>2,
				'promotion_id'=>$promotion_id,
				'user_id'=>$user_id,
				'is_condition'=>'N'
			),
			'select'=>'promotion.id as proid,begin_time,end_time',
			'one'=>true
		));

		if(count($promotion)>0)
		return true;
		else
		return false;
	}

	static public function checkUsed($promotion_id,$user_id)
	{
		$promotion=DB::LimitQuery('promotion',array(
	'condition'=>array('id'=>$promotion_id,'type_ad'=>2),
	'one'=>true
		));
		if(count($promotion)>0)
		{

			$begin_time=strtotime($promotion['begin_time']);
			$end_time=strtotime($promotion['end_time']);
			$check_used_cash=DB::LimitQuery('order',array(
		'condition'=>array(
		'status_id'=>5,
		'user_id'=>$user_id,
		'service'=>'cashpayment',
		"create_time > {$begin_time}",
		"create_time < {$end_time}"
			),
		'one'=>true
			));
			//revert time
			$begin_time=$promotion['begin_time'];
			$end_time=$promotion['end_time'];
			$check_used_sms=DB::LimitQuery('confirm_tbl',array(
		'condition'=>array('status'=>'used',
		'user_id'=>$login_user_id,
		"str_to_date(updated_time,'%d-%m-%Y %H:%i:%s') >str_to_date( '".$begin_time."','%d-%m-%Y %H:%i:%s')",
		"str_to_date(updated_time,'%d-%m-%Y %H:%i:%s') < str_to_date( '".$end_time."','%d-%m-%Y %H:%i:%s')",
			),
		'one'=>true
			));
		$check_used_sms2=DB::LimitQuery('confirm_tbl',array(
		'condition'=>array('status'=>'used',
		'user_id'=>$login_user_id,
		"str_to_date(updated_time,'%Y-%m-%d %H:%i:%s') >str_to_date( '".$begin_time."','%d-%m-%Y %H:%i:%s')",
		"str_to_date(updated_time,'%Y-%m-%d %H:%i:%s') < str_to_date( '".$end_time."','%d-%m-%Y %H:%i:%s')",
			),
		'one'=>true
			));
			if(count($check_used_cash)>0||count($check_used_sms)>0||count($check_used_sms2)>0)
			{
				return true;
			}
			else
			return false;
		}
		else
		return false;
	}

}
?>