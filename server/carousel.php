<?php
require_once "db.php";
$sql = "SELECT referenciak.id,referenciak.name,refphotos.image from referenciak,refphotos where referenciak.id=refphotos.refid";/*<----Ide megy az sql parancs!!!*/
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>