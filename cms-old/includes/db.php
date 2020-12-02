<?php ob_start();


$db['db_host'] = "mysql.hostinger.com";
$db['db_user'] = "u740267581_mark";
$db['db_pass'] = "Workhouse01";
$db['db_name'] = "u740267581_dysonblog";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);



$query = "SET NAMES utf8";
mysqli_query($connection,$query);

//if($connection) {
//
//echo "We are connected";
//
//}


?>