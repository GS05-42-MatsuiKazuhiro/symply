<?php

ini_set('display_errors', 1);

require_once(__DIR__ . '/vendor/autoload.php');

define('APP_ID', '633743700084205');
define('APP_SECRET', '3dd7825ae47666820be7ecbbeb903816');
define('APP_VERSION', 'v2.5');

define('DSN', 'mysql:host=localhost;dbname=mysql606.db.sakura.ne.jp');
define('DB_USERNAME', 'symply');
define('DB_PASSWORD', 'symply1015');

define('CALLBACK_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/login.php');

session_start();

require_once(__DIR__ . '/functions.php');