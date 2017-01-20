<?php
$host = "mysql606.db.sakura.ne.jp";
$username = "symply";
$password = "symply1015";
$dbname = "symply_db";

// FacebookSDKを初期化：Facebook PHP SDK v5.
$fb = new Facebook\Facebook([
	'app_id' => '633743700084205',
	'app_secret' => '3dd7825ae47666820be7ecbbeb903816',
	'default_graph_version' => 'v2.8',
	'default_access_token' => isset($_SESSION['facebook_access_token']) ? $_SESSION['facebook_access_token'] : 'APP-ID|APP-SECRET'
]);
