<?php

require ( 'sql.core.class.php' );
require ( 'sql.class.php' );
require ( 'hash.crypt.class.php' );
require ( 'custom.class.php' );
require ( 'custom.sql.php' );
require ( 'user.class.php');
require ( 'file.uploader.class.php');

//PHARMASYS
$db = new ezSQL_mysqli(DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME, MYSQL_HOST);
$sql_custom = new SQLCustom(DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME, MYSQL_HOST);

$encryption = new hash_encryption(WEB_KEY);
$custom = new custom;

$user =  new User($encryption);

?>