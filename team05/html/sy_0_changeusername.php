<?php
require_once('sy_config.php');
session_start();
$username = "";
if( isset( $_SESSION['username'] ) ) {
  $username =  $_SESSION['username'];
}
$sql = "UPDATE user SET username='{$_POST['changeusername']}' WHERE username='$username' ";
$_SESSION['username'] = $_POST['changeusername'];
$result = $mysqli->query($sql);

if ($result) {
    header('Location: sy_0_admin.php');
}else {
    echo "Fail to update";
}

mysqli_close($mysqli);
?>