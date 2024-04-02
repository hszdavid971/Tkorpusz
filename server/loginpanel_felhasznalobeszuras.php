<?php
require_once "db.php";
$pw=password_hash("123456", PASSWORD_DEFAULT);
$sql = "INSERT INTO adminpanel values (null, 'Krisz', '{$pw}')";/*<----Ide megy az sql parancs!!!*/
$stmt=$db->exec($sql);
if ($stmt) echo "sikeres insert";
?>