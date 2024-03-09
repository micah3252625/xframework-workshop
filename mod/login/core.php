<?php 

	$filename = 'login';
	$module_dir = 'login/';
	$form_name = 'login';
	$mod		= '0';
	$login_register_js = $module_dir . 'js.php';

	$hyperlink_register_process = urlencode($encryption->encrypt('register-process'));
	
	switch ($parameter)
	{
		case 'login-frm':
			require(MODULES.$module_dir.$filename.'.form.php');
			$option_checker++;
		break; 
		case 'register-frm':
			require(MODULES.$module_dir.'register.form.php');
			$option_checker++;
		break; 
		case 'login-process':
			require(MODULES.$module_dir.$filename.'.process.php');
			$option_checker++;
		break;
		case 'register-process':
			require(MODULES.$module_dir.'register.process.php');
			$option_checker++;
		break;
		case 'logout-process':
			require(MODULES.$module_dir.$filename.'.logout.process.php');
			$option_checker++;
		break;
		
		// case 'login-forgot-password':
		// 	require(MODULES.$module_dir.$filename.'.forgot.password.php');
		// 	$option_checker++;
		// break;

		// case 'login-forgot-password-process':
		// 	require(MODULES.$module_dir.$filename.'.forgot.password.process.php');
		// 	$option_checker++;
		// break;

		// case 'login-avail':
		// 	require(MODULES.$module_dir.$filename.'.avail.php');
		// 	$option_checker++;
		// break;

	}
