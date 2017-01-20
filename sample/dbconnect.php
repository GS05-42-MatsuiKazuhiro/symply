<?php
require_once( 'core/config.php' );

//$mysqli = new mysqli($host, $username, $password, $dbname);
$mysqli = new mysqli('mysql606.db.sakura.ne.jp', 'symply', 'symply1015', 'symply_db');
if ($mysqli->connect_error) {
	error_log($mysqli->connect_error);
	exit;
}
