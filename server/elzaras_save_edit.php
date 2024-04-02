<?php
include '../server/adminkapcsolodas.php';
$columnName = $_POST["column"];
$columnValue = $_POST["editval"];
$id= $_POST["id"];
$sql="update elzaras_arak set {$columnName}='{$columnValue}' where id={$id}";
echo $sql;
$stmt=$db->exec($sql);
?>