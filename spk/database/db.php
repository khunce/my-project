<?php

$db_host = "localhost";
$db_name = "spk";
$db_user = "root";
$db_pass = "";
mysql_connect($db_host, $db_user, $db_pass) or die("Connection to host is failed, perhaps the service is down!");
mysql_select_db($db_name) or DIE('Database name is not available!');
?>


