<?php
session_start();
unset($_SESSION['felhasznalonev']);
session_destroy();
echo true;
?>