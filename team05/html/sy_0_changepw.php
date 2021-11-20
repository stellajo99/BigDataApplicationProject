<?php
require_once('sy_config.php');
session_start();
$username = "";
if( isset( $_SESSION['username'] ) ) {
  $username =  $_SESSION['username'];
}
$sql = "UPDATE user SET pwd='{$_POST['changepw']}' WHERE username='$username' ";
$result = $mysqli->query($sql);

if ($result) {
    header('Location: sy_0_admin.php');
}else {
    echo "Fail to update";
}
mysqli_free_result($result);
mysqli_close($mysqli);
?>