<?php	
	session_start();
	$_POST['logout'] = "User logout: ".$encryption->decrypt($_SESSION[WEB_ABSTRACT]['user_names']);
	$mod 	= "0";
	unset($_SESSION);
	session_destroy();

	header('Location: ' . URL_LOCATION );

?>