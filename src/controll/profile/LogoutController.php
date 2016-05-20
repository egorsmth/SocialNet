<?php
use hive2\controll\profile\DBActions\DBProfileActions;
use hive2\models\User;

session_start();
$user = $_SESSION['user'];
$db = new DBProfileActions();

$db->setOffline($user->getId());
$db->setWasOnline($user->getId());

$_SESSION = array();
if (session_id() != "" || isset($_COOKIE[session_name()]))
{
	setcookie(session_name(), '', time()-2592000, '/');
}

session_destroy();

header('Location:/hive2/login');
