<?php
$host = 'localhost';
$db_name = 'tkorpusz';
$db_username = 'tkorpusz'; 
$db_password = 'tkorpusz'; 
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
				
$db = new PDO("mysql:host=$host;dbname=$db_name; charset=utf8",$db_username,$db_password,$options);
?>