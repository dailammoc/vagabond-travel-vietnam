<?php

class ZZeroOrder {
	/*static public function GetZeroOrderByUserAndDeal($user_id, $team_id){
		$condition = array(
			'user_id' => $user_id,
			'team_id' => $team_id,
		);
		$zeroOrder = DB::LimitQuery('zero_order',array(
				'condition' => $condition,
			)
		);
		return $zeroOrder;
	} 
*/
	static public function updateStatusRefererBySms($zero_order, $teamZero){
		
		//get referer
		$conditionRef = array(
			'team_id' => $zero_order['team_id'],
			'user_id' => $zero_order['referer_id'],
		);
		$zero_order_ref = DB::LimitQuery('zero_order',array(
			'condition' => $conditionRef,
			'one' => true,
		));
		
		if($zero_order_ref != null && $zero_order_ref['id']!=0){
			$curRefStatus = $zero_order_ref['status'];
			//update total order for referer
			Table::UpdateCache('zero_order',$zero_order_ref['id'],array(
					'num_of_order' => $zero_order_ref['num_of_order'] + 1,
			));
			
			if($curRefStatus == 'done'){
				if(!$teamZero['close_time'] && $teamZero['end_time'] > time() && 
										($teamZero['max_number'] - $teamZero['now_number']) > 0){
					if($zero_order_ref['num_of_order'] + 1 >= $teamZero['num_to_success']){
						Table::UpdateCache('zero_order',$zero_order_ref['id'],array(
							'status' => 'success',
						));
						Table::UpdateCache('team',$teamZero['id'], array(
							'now_number' => $teamZero['now_number'] + 1,
						));
					}
				}
			}
			
			$zero_order_ref = Table::FetchForce('zero_order', $zero_order['referer_id']);
			self::updateStatusRefererBySms($zero_order_ref,$numSuccess);
		}
		
	}
}

?>