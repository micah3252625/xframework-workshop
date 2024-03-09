<?php 
$option_checker = 0;
$modules_path = './mod/';

if ($modules = opendir($modules_path)) {
	while (false !== ($dir = readdir($modules))) {
		if ($option_checker  > 0) {
			break;
		}
		if ($dir != "." && $dir != "..") {
			if (is_dir("$modules_path/$dir")) {
				if (file_exists("$modules_path/$dir/core.php")) {
					include("$modules_path/$dir/core.php");
				}
			}
		}
	}
	closedir($modules);
}

if ($option_checker === 0) {

	// module filenames
	$module_filename = 'main/main.php';
	$module_jsfilename = 'main/js/js.php';

	// module inner folders
	$ajax = '';
	$processes = '';
	$list = '';
	
	$page_location = 0;

	// Add hyperlinks here
	$hyperlink_main = urlencode($encryption->encrypt('main'));

	switch($parameter) {
		case 'main' :
			$module_filename = 'main.php';
			$page_location = 0;
			break;
	}
}


