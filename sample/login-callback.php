<?php
session_start();
require_once( 'vendor/autoload.php' );
require_once( 'core/config.php' );

// このあたりはFacebookの仕様に沿って書いたものです
// 公式マニュアルは分かりづらいので下記記事がおすすめです。
// http://www.phpgang.com/how-to-login-with-facebook-api-sdk-v5-in-php_2879.html
$helper = $fb->getRedirectLoginHelper();
$_SESSION['FBRLH_state']=$_GET['state'];

try {
	$accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
	// When Graph returns an error
	echo 'Graph returned an error: ' . $e->getMessage();
	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
	// When validation fails or other local issues
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
	exit;
}

try {
  // Get the Facebook\GraphNodes\GraphUser object for the current user.
  // If you provided a 'default_access_token', the '{access-token}' is optional.
  $response = $fb->get('/me?fields=id,name,email', $accessToken->getValue());
//  print_r($response);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'ERROR: Graph ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'ERROR: validation fails ' . $e->getMessage();
  exit;
}
$me = $response->getGraphUser();


if (isset($accessToken)) {
	// Logged in!
	$_SESSION['facebook_access_token'] = (string) $accessToken;
} elseif ($helper->getError()) {
	// The user denied the request
}

header('Location: login.php?=new');


