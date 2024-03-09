<?php
$filename = 'user';

// directories
$module_filename = '';
$module_dir = 'user/';
$module_jsfilename = $module_dir . 'js/js.php';
$page_location = 1;


switch ($parameter) {
    case 'user':
        $module_filename = $module_dir . $filename . '.main.php';
        $option_checker++;
        break;
    case 'user-add-form':
        $module_filename = $module_dir . $filename . '.add.form.php';
        $option_checker++;
        break;
    case 'user-add-form-process':
        $module_filename = $module_dir . $filename . '.add.form.process.php';
        $option_checker++;
        break;
}
