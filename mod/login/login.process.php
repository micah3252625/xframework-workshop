<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username =  $custom->sql_safe($_POST['username']);
	$password =  $custom->sql_safe($_POST['password']);

	if ($username === 'root' && $password === 'root') {
		$_SESSION[WEB_ABSTRACT]['username'] = $encryption->encrypt($username);
		$_SESSION[WEB_ABSTRACT]['logged_in'] = true;
		header('Location: ' . URL_LOCATION);
	} else {
		header('Location: ' . URL_LOCATION . '&login=NO');
		exit();
	}
} else {
	throw new Exception("Request is not a POST method");
}
