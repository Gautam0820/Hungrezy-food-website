<?php
session_start();
session_unset();
session_destroy();
$prev = $_SERVER['HTTP_REFERER'];
header("Location: ".$prev);
exit();
?>