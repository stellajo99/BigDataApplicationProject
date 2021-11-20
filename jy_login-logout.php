<?php
session_start();
$_SESSION = array();
session_destroy();
header("location: jy_0_login_main.php");
exit;
?>
