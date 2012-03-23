<?php

/**
 * Change percent report for enterprise
 *
 * @param   interger
 * @param   interger
 * @return	interger
 */
function changePercent($a,$b)
{
	$percent= round($a/$b*100);
	if( $percent > 0 && $percent!=100)
	{
		if($a >= $b )
		$percent = '+'.$percent;
		else
		$percent = '-'.$percent;
	}
	else
	$percent = '+0';
	return $percent;
}
function createToken($name)
{
	$token=sha1(uniqid(mt_rand(). $salt,true));
	$_SESSION[$name] = $token;
	$_SESSION['token-expires'] = time() + 600;//10 minute
	return $token;
}

function isValidToken($name,$hash,$clear=false){
	$valid=true;
	if (!empty($hash)) {
		if (isset($_SESSION[$name])) {
			if($_SESSION[$name]!=$hash || $_SESSION['token-expires']< time())
			$valid=false;
			if ($clear) unset($_SESSION[$name]);
		}
	}
	return $valid;
}

function include_template($name){
	include(DIR_VIEW_ENTERPRISE.'/'.$name.'.php');
}

function createTitle($title,$tag_title){
	$title='';
	if($tag_title)
	$title=filterTitle($title).'-'.filterTitle($tag_title);
	else
	$title=filterTitle($title);
	return $title;
}
?>