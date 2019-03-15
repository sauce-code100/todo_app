<?php 
$db['host'] = "localhost";
$db['user'] = "root";
$db['pass'] = "";
$db['name'] = "todo";

foreach($db as $key => $value){
    define(strtoupper($key), $value);

}

$connection = mysqli_connect(HOST, USER, PASS, NAME);
if(!$connection){
    echo "We couldn't connect to the database";
}



?>