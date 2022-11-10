<?php
define('DB_HOST','localhost');
define('DB_USER','Daniela');
define('DB_PASS','dani0303');
define('DB_NAME','php_dev');

// define connection

$conn= new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($conn->connect_error){
    die('Connection failed'.$conn->connect_error);
}

