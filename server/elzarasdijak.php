<?php
require_once "db.php";
$sql = "SELECT * from elzaras_arak";/*<----Ide megy az sql parancs!!!*/
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>