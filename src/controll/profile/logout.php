<?php

use hive2\controll\DBActions;
use hive2\models\User;

session_start();
$user = $_SESSION['user'];
$db = new DBActions($dbdriver, $dbhost, $dbname, $dbusername, $dbpassword);

$db->setOffline($user->getEmail());

$_SESSION = array();
if (session_id() != "" || isset($_COOKIE[session_name()]))
{
	setcookie(session_name(), '', time()-2592000, '/');
}

session_destroy();

header('Location:/hive2/login');
?>
