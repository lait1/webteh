<?php
$host = "localhost"; 
$dbname = "webteh"; 
$login = "root"; 
$password = ""; 
$connection  = new PDO("mysql:host={$host};dbname={$dbname};charset=UTF8", $login, $password, array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'" ));


