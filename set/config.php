<?php

$db_host = "localhost";
$db_name = "xframework";
$db_user = "root";
$web_key = 'adzu2020eckstianjit';

// GLOBAL CONSTANTS
ini_set("error_reporting",        "on");
session_start();
define('WEB_NAME',                'xFramework');
define('WEB_ABSTRACT',            'xFramework');
define('WEB_DESCRIPTION',        'CITS Php Framework');

//COMPANY DETAILS (CLIENT)
define('COMPANY_NAME_CLIENT',    'Office Name');
define('COMPANY_ADDRESS_CLIENT', 'Office Address');
define('COMPANY_CONTACT_CLIENT', 'Office Local Number');

//COMPANY DETAILS (AUTHOR)
define('COMPANY_NAME',            'AdZU CITS');
define('COMPANY_ADDRESS',        'Zamboanga City');

//DEV
define('URL_LOCATION',            'http://localhost/xFramework/'); //change this to wamp-www folder name
define('MYSQL_HOST',           $db_host);
define('DATABASE_NAME',        $db_name);
define('DATABASE_USER',        $db_user);
define('DATABASE_PASSWORD',    '');

define('MAIN_PAGE',            URL_LOCATION . '?parameter=');
define('ERROR_URL_LOCATION',    'http://localhost/xFramework/error.page.php/?valid=NO');
// for manage compononents
define('CLASSES',                 'cls/');
define('SETTINGS',                'set/');
define('LAYOUT',                'lay/');
define('MODULES',                'mod/');

//FILE LOCATIONS
define('IMAGES',                 URL_LOCATION . 'assets/img/');
define('CSS',                    URL_LOCATION . 'assets/css/');
define('JS',                    URL_LOCATION . 'assets/js/');
define('ASSETS',               URL_LOCATION . 'assets/');
define('VENDOR',               URL_LOCATION . 'assets/vendor/');
define('FILE_INPUTS',          URL_LOCATION . 'assets/bootstrap-fileinput/');
define('PLUG',                    URL_LOCATION . 'plug/');


//PHP PLUGINS
define('TCPDF',                PLUG . 'tcpdf/');


//SECURITY CONFIGURATIONS
define('WEB_KEY',                $web_key); //CHANGE THIS AND SEE HOW IT WILL NOT LOGIN

//OTHER CONFIGURATIONS
define('DEFAULT_TIMEZONE',        'Asia/Manila');
define('DEFAULT_LANGUAGE',        'en');
define('ROBOTS',                'noindex, nofollow');
define('REQRD_FLD',            '<span style="color: red;font: normal bold 16px Helvetica;">*</span>');

// PHPMailer Credentials
define('MAILER_EMAIL', 'forme@adzu.edu.ph');
define('MAILER_PASS', 'cpzwdaniboxvprhy');
define('MAILER_TITLE', 'ACCU-IMS');
