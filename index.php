<?php
ob_start();
header("Expires: Thu, 17 May 2001 10:17:17 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");

ini_set('session.gc_maxlifetime', 86400);
ini_set('session.cookie_lifetime', 86400);

require_once('set/config.php');
require_once(CLASSES . 'classes.php');
$timezone = "Asia/Manila";
date_default_timezone_set($timezone);

if (!isset($_SESSION[WEB_ABSTRACT])) {
	$parameter 	= isset($_REQUEST['parameter']) ? strtolower(trim($encryption->decrypt($_REQUEST['parameter']))) : "";
	// if($_SESSION['login_attempt']>=3) {
	// $parameter = "login-avail";
	// }
	// if($_SESSION['user_login_attempt']>=3) {
	// $parameter = "login-forgot-password";
	// }
	if ($parameter == "" or  ($parameter != "login-process" && $parameter != "login-forgot-password" && $parameter != "login-forgot-password-process" && $parameter != "login-frm" && $parameter != "login-avail" && $parameter != 'register-frm' && $parameter != 'register-process')) {
		$parameter 	= "login-frm";
	}
} else {
	$mode 		= isset($_REQUEST['mode']) ? strtolower(trim($encryption->decrypt($_REQUEST['mode']))) : "";
	$parameter 	= isset($_REQUEST['parameter']) ? strtolower(trim($encryption->decrypt($_REQUEST['parameter']))) : "";
}

$page_type 	= isset($_REQUEST['page_type']) ? strtolower(trim($encryption->decrypt($_REQUEST['page_type']))) : '1';

$curr_username = $user->getUserName();

if ($page_type == '1') {
	if ($parameter == 'login-frm' or $parameter == 'login-forgot-password' or $parameter == 'login-process' or $parameter == 'login-avail' or $parameter == 'register-frm' or $parameter == 'register-process') {
		// include LAYOUT."top-login.php";
		include LAYOUT . "top.php";
		include MODULES . "core.php";
		include LAYOUT . "footer.php";
		include MODULES . $module_filename;
	} else {
		include LAYOUT . "top.php";
		include LAYOUT . "sidebar.php";
		include LAYOUT . "header.php";
		include MODULES . "core.php";
		include MODULES . $module_filename;
		include LAYOUT . "footer.php";
	}
} else {
	include MODULES . "core.php";
	include MODULES . $module_filename;
}

//FOR LOGS
// if($_POST || $_GET) {
// 	if(isset($_POST['form_action'])) {
// 		$mode 					= $form_action;
// 	}
// 	$log_data 					= array();
// 	$log_data['log_user'] 		= $cur_userid;
// 	$log_data['log_mode'] 		= $mode;
// 	$log_data['log_module'] 	= $mod;
// 	$logdata = array_merge($_POST,$_GET);
// 	if($record) {
// 		$logdata = array_merge($_POST,$_GET,get_object_vars($record));
// 	}
// 	$logdx = "";
// 	foreach($logdata as $varx => $logd) {
// 		$decr_l = $logd;
// 		if($logd == 'Array' || is_array($logd)) {
// 			$decr_l = implode(",", $_POST[$varx]);
// 		}
// 		if($record) {
// 			if($varx == 'parameter' || $varx == 'mode') {
// 				$decr_l = $encryption->decrypt($logd);
// 			}
// 		}
// 		elseif($varx == 'parameter' || $varx == 'id' || 
// 			$varx == 'form_action' || $varx == 'page_type' 
// 			|| $varx == 'mode') {
// 			$decr_l = $encryption->decrypt($logd);
// 		}
// 		$logdx .= $varx.": ".$decr_l.PHP_EOL;
// 	}

// 	if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
// 		//check for ip from share internet
// 		$ip = $_SERVER["HTTP_CLIENT_IP"];
// 	}
// 	elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
// 		// Check for the Proxy User
// 		$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
// 	}
// 	else {
// 		$ip = $_SERVER["REMOTE_ADDR"];
// 	}

// 	$log_data['log_data'] 		= $logdx;
// 	$log_data['log_ip'] 		= $ip;
// 	$log_data['user_agent'] 	= $_SERVER['HTTP_USER_AGENT'];
// 	$log_data['branch_code'] 	= $cur_branchcode;
// 	$log_data['log_datetime'] 	= date('Y-m-d H:i:s');
// 	$added						= $sql_custom->insert_all("tbl_activity_log",$log_data);
// }

ob_end_flush();
