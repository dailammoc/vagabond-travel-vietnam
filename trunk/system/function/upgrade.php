<?php
/*
function gmimi_action($action, $version='V1.0') {
	global $INI;
	$user = $INI['sms']['user'];
	$host = strtolower(strval($_SERVER['HTTP_HOST']));
	$url = "http://yoursite.com/version.php?action={$action}&version={$version}&user={$user}&host={$host}";
	$r = Utility::HttpRequest($url);
	return json_decode($r, true);
}

function gmimi_upgrade($action, $version='V1.0') {
	$result = gmimi_action($action, $version);
	if (is_array($result) && 'db'==$action) {
		foreach($result As $onesql) {
			$r = DB::Query($onesql);
		}
		return true;
	}
	return $result;
}

function gmimi_version() {
	return gmimi_action('version');

}
*/