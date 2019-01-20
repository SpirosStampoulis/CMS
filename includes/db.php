<?php
/**
 * Created by PhpStorm.
 * User: Darkdreamer
 * Date: 1/18/2019
 * Time: 9:54 PM
 */

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach($db as $key => $value) {
    define(strtoupper($key), $value);
}


//$connection = mysqli_connect('localhost', 'root', '','cms');
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//if($connection) {
//    echo "we are connected";
//}
?>